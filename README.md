Vagrant setup script for stat.ink development
=============================================

Prerequirements
---------------

- Installed VirtualBox to the host computer (your PC)
- Installed Git to the host computer

Set up
------

```sh
# Checkout the script
git clone https://github.com/statink/devenv-vagrant.git
cd devenv-vagrant

# Create & set up a virtual machine
vagrant plugin install vagrant-vbguest
vagrant up --provision
# Take a looooooooong time

# Get an IP address of virtual machine
vagrant ssh -c "ip a"
# You will get IP addresses information. for example,
#     3: eth1:
#         inet 172.28.128.3/24 ...
#              ^^^^^^^^^^^^

# Open http://172.28.128.3/ (see above) in your browser
```

License
-------

Copyright (C) 2018 AIZAWA Hina.

Under the MIT License