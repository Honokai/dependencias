@servers(['web' => 'deployer@10.10.0.31'])

@setup
    // composer run deploy --env=$CI_ENVIRONMENT_NAME --namespace=$CI_PROJECT_NAMESPACE --projeto=$PROJECT_NAME
    $release = date('YmdHis');
    $app_dir = "/var/www/" . $env . "/" . $projeto;
    $release_dir = $app_dir  . '/releases';
    $novo_release = $release_dir . '/' . $release;
@endsetup

@story('deploy')
    clonar_repositorio
    atualizar_symlinks
@endstory

@task('clonar_repositorio', ['on' => 'web'])
    echo {{ $release_dir }}
    echo 'Clonando...'

    mkdir -p {{ $release_dir }}
    echo "repositorio {{$namespace}}/{{$projeto}}"
    git clone --depth 1 git@gitlab.ladetec.iq.ufrj.br:{{ $namespace }}/{{ $projeto }}.git {{ $novo_release }}
    cd {{ $novo_release }}
@endtask

@task('atualizar_symlinks', ['on' => 'web'])
    echo 'Ativando release...'
    ln -snf {{ $novo_release }} {{ $app_dir }}/current
@endtask


<!-- @finished
    @discord('https://discordapp.com/api/webhooks/695700395800002581/qJLUmyXO3f-BBtl07MI1dbcMyIMYKEPSMGAvMBVi-dJzaC83TSEaPA1RUOUTrni6G_Mu', "deploy de {$projeto} realizado com sucesso em $env")
@endfinished -->
