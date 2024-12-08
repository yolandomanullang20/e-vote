pipeline {
    agent any
    stages {
        stage('Git Pull') {
            steps {
                script {
                    sh '''
                    sudo -u yolando bash -c "cd /var/personal/php/e-voting && git pull"
                    '''
                }
            }
        }
    }
}
