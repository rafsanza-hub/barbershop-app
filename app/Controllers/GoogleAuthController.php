<?php

namespace App\Controllers;

use Google\Client;
use Google\Service\Oauth2;
use App\Models\UserModel;

class GoogleAuthController extends BaseController
{
    protected $client;
    protected $clientId;
    protected $clientSecret;

    public function __construct()
    {
        
        $this->clientId = getenv('GOOGLE_CLIENT_ID');
        $this->clientSecret = getenv('GOOGLE_CLIENT_SECRET');
        $this->client = new Client();
        
        $this->client->setClientId($this->clientId);
        $this->client->setClientSecret($this->clientSecret);
        $this->client->setRedirectUri(base_url('auth/google/callback'));
        $this->client->addScope('email');
        $this->client->addScope('profile');
    }

    public function login()
    {
        // Membuat URL otorisasi
        $authUrl = $this->client->createAuthUrl();

        // Redirect pengguna ke URL otorisasi Google
        return redirect()->to($authUrl);
    }

    public function callback()
    {
        if ($this->request->getVar('code')) {
            // Mendapatkan token akses dari kode otorisasi
            $token = $this->client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
            $this->client->setAccessToken($token);

            // Mendapatkan informasi pengguna dari Google
            $googleService = new Oauth2($this->client);
            $googleUser = $googleService->userinfo->get();

            // Cek apakah pengguna sudah terdaftar dengan google_id
            $userModel = new \Myth\Auth\Models\UserModel();
            $user = $userModel->where('google_id', $googleUser->id)->first();

            if ($user) {
                // Jika pengguna sudah terdaftar, lakukan login
                $auth = service('authentication');
                $auth->login($user);

                // Redirect ke halaman dashboard setelah login berhasil
                return redirect()->to('/dashboard')->with('error', 'Login berhasil!');
            } else {
                $userModel1 = new UserModel();
                  // Jika pengguna belum terdaftar, registrasi pengguna baru
                  $userData = [
                    'email' => $googleUser->email,
                    'username' => $googleUser->name,
                    'google_id' => $googleUser->id, // Menyimpan google_id untuk autentikasi Google
                    'password_hash' => password_hash(bin2hex(random_bytes(10)), PASSWORD_DEFAULT),
                    'active' => 1,
                ];
                $userModel1->save($userData);

                // Setelah registrasi, login pengguna dan arahkan ke dashboard
                $user = $userModel->where('google_id', $googleUser->id)->first();
                $auth = service('authentication');
                $auth->login($user); // Login otomatis setelah registrasi berhasil

                // Redirect ke halaman dashboard setelah login berhasil
                return redirect()->to('/dashboard')->with('error', 'Registrasi dan login berhasil!');
            }
        } else {
            // Jika gagal login, redirect ke halaman login
            return redirect()->to('/login')->with('error', 'Autentikasi Google gagal');
        }
    }

   
}
