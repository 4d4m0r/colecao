<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
	public function index()
	{
		return view('login');
	}

    public function dashboard()
	{
		return view('admin/template/header')
			.view('admin/dashboard');
	}

	public function signIn(){
		$nome = $this->request->getPost('inputName');
		$password = $this->request->getPost('inputPassword');

		$usuarioModel = new UsuarioModel();

		$dadosUsuario = $usuarioModel->getByName($nome);

		if (count($dadosUsuario) > 0) {
			$hashUsuario = $dadosUsuario['senha_admin'];
			if (password_verify($password, $hashUsuario)) {
				session()->set('isLoggedIn', true);
				session()->set('nome', $dadosUsuario['nome_admin']);
				return redirect()->to(base_url('/dashboard'));
			} else {
				session()->setFlashData('msg', 'Usuário ou Senha incorretos');
				return redirect()->to('/login');
			}
		} else {
			session()->setFlashData('msg', 'Usuário ou Senha incorretos');
			return redirect()->to('/login');
		}
	}

	public function signOut(){
		session()->destroy();
		return redirect()->to(base_url());
	}
}