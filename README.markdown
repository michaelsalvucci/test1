git init

# git clone (nothing yet)

# People who do not have editable access would use this:
git submodule add git://github.com/weaverryan/ioMenuPlugin.git plugins/ioMenuPlugin
git submodule add git://github.com/n1k0/npAssetsOptimizerPlugin.git plugins/npAssetsOptimizerPlugin
git submodule add git://github.com/weaverryan/ioEditableContentPlugin.git plugins/ioEditableContentPlugin
git submodule add git://github.com/iostudio/ioPagePlugin.git plugins/ioPagePlugin
git submodule add git://github.com/weaverryan/ioBlogPlugin.git plugins/ioBlogPlugin

# People who can edit the plugins would use something like this:
# git submodule add git://git@github.com:iostudio/ioPagePlugin.git

git submodule foreach --recursive 'git submodule init && git submodule update'

# http://www.symfony-project.org/plugins/sfDoctrineGuardPlugin
apt-get install php-pear
symfony plugin:install sfDoctrineGuardPlugin

# Copy and edit your admin settings
cp data/fixtures/sfGuard.yml.template data/fixtures/sfGuard.yml

# Copy and edit your database settings
cp config/databases.yml.template config/databases.yml

# npAssetOptimizerPlugin
# When you're ready to optimize assets, do this:
php symfony optimize:assets frontend --type=all

.......left off reading ioPagePlugin.......>>>>>>
