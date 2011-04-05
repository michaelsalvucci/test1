git init

#git clone (nothing yet)

git submodule add git://github.com/weaverryan/ioMenuPlugin.git plugins/ioMenuPlugin
git submodule add git://github.com/n1k0/npAssetsOptimizerPlugin.git plugins/npAssetsOptimizerPlugin
git submodule add git://github.com/weaverryan/ioEditableContentPlugin.git plugins/ioEditableContentPlugin

git submodule foreach --recursive 'git submodule init && git submodule update'


