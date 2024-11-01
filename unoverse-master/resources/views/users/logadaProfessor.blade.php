@section('titulo', 'Perfil')
@include('layout._menu') 

    <div class="engloba-logada espaco">
        <h1>Bem vindo(a), {{ Auth::user()->nome }}!</h1>
        <div class="card-logada iniciante-professor">
            <div class="img-log">   
                <img src="{!! asset('img/user/professor-log.png') !!}" alt="ícone do professor">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="iniciante">Iniciante</span></h2>
                <p>Conceitos iniciais quanto ao uso do Arduino. As aulas serão guiadas pelo uso do Arduino físico, então, é necessário os componentes em mãos. Bons estudos!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvProfessor.nivel', ['nivel' => 'iniciante']) }}" class="btn-professor">Continuar</a>
            </div>
        </div>

        <div class="card-logada intermediario-professor">
            <div class="img-log">
                <img src="{!! asset('img/user/professor-log.png') !!}" alt="ícone do professor">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="intermediario-prof">Intermediário</span></h2>
                <p>Uma apresentação um pouco mais profunda sobre os conceitos do uso do Arduino. As aulas serão guiadas pelo uso do Arduino físico, então, é necessário os componentes em mãos. Bons aprendizados!</p>
            </div>
            <div class="btn-continuar">
                <a href="{{ route('atvProfessor.nivel', ['nivel' => 'intermediario']) }}" class="btn-professor" >Continuar</a>
            </div>
        </div>


        <div class="card-logada avancado-professor">
            <div class="img-log">
                <img src="{!! asset('img/user/professor-log.png') !!}" alt="ícone do professor">
            </div>
            <div class="texto-log">
                <h2>Curso de Arduino <span class="avancado">Avançado</span></h2>
                <p>Uma aventura para quem já explorou a robótica antes e tem um conhecimento prévio! As aulas serão guiadas pelo uso do Arduino físico, então, é necessário os componentes em mãos. Bons estudos!</p>
            </div>
            <div class="btn-continuar">
                <a  href="{{ route('atvProfessor.nivel', ['nivel' => 'avancado']) }}" class="btn-professor">Continuar</a>
            </div>
        </div>
        
    </div>
