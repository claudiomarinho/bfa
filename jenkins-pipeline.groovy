node('maven') {
    stage('build') {
        echo 'building app :)'
        openshiftBuild(buildConfig: 'bfateste', showBuildLogs: 'true')
    }
    stage('verify') {
        echo 'dummy verification....'
    }
    stage('deploy') {
        input 'Aprovacao Coordenador'
        openshiftDeploy(deploymentConfig: 'bfateste')
    }
    stage('Efetuando Deploy') {
       echo 'fake stage...'
       sleep 5 
    }
}
