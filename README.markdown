git init

# git clone (nothing yet)

git submodule add git://github.com/weaverryan/ioMenuPlugin.git plugins/ioMenuPlugin
git submodule add git://github.com/n1k0/npAssetsOptimizerPlugin.git plugins/npAssetsOptimizerPlugin
git submodule add git://github.com/weaverryan/ioEditableContentPlugin.git plugins/ioEditableContentPlugin

git submodule foreach --recursive 'git submodule init && git submodule update'

# http://www.symfony-project.org/plugins/sfDoctrineGuardPlugin
apt-get install php-pear
symfony plugin:install sfDoctrineGuardPlugin

# Copy and edit your admin settings
cp data/fixtures/sfGuard.yml.template data/fixtures/sfGuard.yml

# Copy and edit your database settings
cp config/databases.yml.template config/databases.yml
