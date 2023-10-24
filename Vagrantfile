Vagrant.configure("2") do |config|
  config.vm.box = "centos/7"

  config.vm.provider "virtualbox" do |vb|
    vb.name = "statink-dev"
    vb.memory = "1024"
  end

  config.vbguest.installer_options = { allow_kernel_upgrade: true }

  config.vm.synced_folder ".", "/vagrant",  create: true, owner: "vagrant", group: "vagrant"
  config.vm.network "private_network", type: "dhcp"

  config.vm.provision "ansible_local" do |ansible|
    ansible.playbook = "playbook.yml"
  end
end
