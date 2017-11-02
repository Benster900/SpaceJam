# SpaceJam
This project automates setting up an IR infrastructure to monitor network and hosts events. The group_vars directory contains enccrypted Ansible config files. If you need the password look in the teams Google Drive/Lastpast account. 


# Build SpaceJam Infrastructure with Ansible
## Download repo locally
* git clone https://github.com/Benster900/SpaceJam.git
* cd SpaceJam
* Copy SSH pub key from local machine to all remote machines

## Install/Setup Manager
ansible-playbook -i hosts deploy_management.yml -u root --vault-id @prompt
* After Wazuh + ELK is setup browse to https://<IP addr of Wazuh> and login. Select "Wazuh" on the left and enter Wazuh API creds.

## Install/Setup pfSense
ansible-playbook -i hosts deploy_pfsense.yml -u root --vault-id @prompt

## Install/Setup FreeIPA
ansible-playbook -i hosts deploy_pfsense.yml -u root --vault-id @prompt

## Install/Setup mail
ansible-playbook -i hosts deploy_mail.yml -u root --vault-id @prompt

## Install/Setup database
ansible-playbook -i hosts deploy_database_server.yml -u root --vault-id @prompt

## Install/Setup Wordpress
ansible-playbook -i hosts deploy_web_server_yml -u root --vault-id @prompt

## Install/Setup agents
ansible-playbook -i hosts deploy_agent.yml -u root --vault-id @prompt


# Todo:
* Update Logstash filters
* Setup theHive docker container to start on reboot
