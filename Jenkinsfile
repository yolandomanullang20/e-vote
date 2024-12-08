pipeline {
    agent any
    stages {
        stage('Git Pull') {
            steps {
                script {
                    sh '''
                    cd /var/personal/php/e-voting && git pull
                    '''
                }
            }
        }
    }
}
