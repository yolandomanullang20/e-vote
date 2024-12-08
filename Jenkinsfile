pipeline {
    agent any
    stages {
        stage('Git Pull') {
            steps {
                script {
                    sh '''
                    sudo -u yolando cd /var/personal/php/e-voting
                    sudo -u yolando git pull
                    '''
                }
            }
        }
    }
}
