git init

#git clone (nothing yet)

git submodule add git://github.com/weaverryan/ioMenuPlugin.git
git submodule add git://github.com/n1k0/npAssetsOptimizerPlugin.git
git submodule add git://github.com/weaverryan/ioEditableContentPlugin.git

git submodule foreach --recursive 'git submodule init && git submodule update'


