<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'NomeProjeto');

// Project repository
set('repository', 'git@github.com:yvescleuder/deploy-automatic.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

//host('project.com')
//    ->set('deploy_path', '~/{{application}}');

host('34.95.245.114')
    ->user('root')
    ->identityFile('~/.ssh/id_ed25519')
    ->set('deploy_path', '/var/www/deploy-automatic');
    
// Tasks

//task('build', function () {
//    run('cd {{release_path}} && build');
//});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

//before('deploy:symlink', 'artisan:migrate');

