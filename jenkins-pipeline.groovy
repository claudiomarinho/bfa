node('maven') {
    stage('Lendo Arquivos') {
        echo 'building app :)'
        openshiftBuild(buildConfig: 'bfateste', showBuildLogs: 'true')
    }
    stage('Verificando') {
        echo 'dummy verification....'
    }
    stage('Aprovacao Coordenador') {
        input 'Aprovacao Coordenador'
        openshiftDeploy(deploymentConfig: 'bfateste')
    }
    stage('Efetuando Deploy') {
       echo 'fake stage...'
       sleep 5 
    }
}
