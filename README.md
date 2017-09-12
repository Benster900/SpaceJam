# SpaceJam
This project automates setting up an IR infrastructure to monitor network and hosts events.

## Setup enviornment
cp group_vars/all.example group_vars/all
Please fill out each key with a value

# Run SpaceJam to setup manager
## Setup locally
git clone https://github.com/Benster900/SpaceJam.git
cd SpaceJam
ansible-playbook -i "localhost," -c local deploy_management.yml

* After Wazuh + ELK is setup browse to https://<IP addr of Wazuh> and login. Select "Wazuh" on the left and enter Wazuh API creds.

## Setup remotely
ansible-playbook -i hosts --private-key [private-key] deploy_management.yml -u root


# Run SpaceJam to setup agents
** Copy SSH pub key from manager to all agents**
ansible-playbook -i hosts --private-key <private-key> deploy_agent.yml -u root

# Todo:
* Add Bro to $PATH
* Create Ansible.cfg
* Create config checkers
* Setup Bro
* Create services scripts
* Ansible notifications for error messages
