<?php
perl: warning: Setting locale failed
https://memo-linux.com/resoudre-lerreur-perl-warning-setting-locale-failed/

Résolution du problème :

Générer de nouveau la bonne locale :
locale-gen fr_FR.UTF-8
Reconfigurer le paquet locales :
dpkg-reconfigure locales
Méthode alternative (merci à David) :

Éditer le fichier bashrc et ajouter :
nano  ~/.bashrc
Ajouter :
#Locales
export LANGUAGE=fr_FR.UTF-8
export LANG=fr_FR.UTF-8
export LC_ALL=fr_FR.UTF-8
Recharger le fichier :
source ~/.bashrc