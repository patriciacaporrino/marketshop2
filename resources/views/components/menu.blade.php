<div class="navbar bg-yellow-300">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl">MarketShop</a>
  </div>
  <div class="flex-none gap-2">
    <div class="form-control">
      <input type="text" placeholder="Pesquisar" class="input input-bordered w-24 md:w-auto" />
    </div>
    <div class="dropdown dropdown-end">
      <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
        </div>
      </div>
      <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Meu Perfil
            <span class="badge">Novidades</span>
          </a>
        </li>
        <li><a>Configurações</a></li>
        <li><a>sair</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="navbar bg-yellow-300">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
    
        <li>
          <a>Categorias</a>
          <ul class="p-2">
            <li><a>Veículos</a></li>
            <li><a>Mercado</a></li>
            <li><a>Celular</a></li>
            <li><a>Decorações</a></li>

          </ul>
        </li>
        <li><a>vestuário</a></li>
      <li><a>calçados</a></li>
      <li><a>cosméticos</a></li>
      </ul>
    </div>
   
  </div>
  <div class="navbar-center hidden lg:flex z-40">
    <ul class="menu menu-horizontal px-1">

      <li>
        <details>
          <summary>Categorias</summary>
          <ul class="p-2">
          <li><a>Veículos</a></li>
            <li><a>Mercado</a></li>
            <li><a>Celular</a></li>
            <li><a>Decorações</a></li>
          </ul>
        </details>
      </li>
      <li><a>vestuário</a></li>
      <li><a>calçados</a></li>
      <li><a>cosméticos</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    
  </div>
</div>