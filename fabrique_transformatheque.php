<?php

/**
 *  Fichier généré par la Fabrique de plugin v6
 *   le 2017-11-03 15:25:55
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 6,
  ),
  'paquet' => 
  array (
    'prefixe' => 'transformatheque',
    'nom' => 'Squelette transformathèque',
    'slogan' => '',
    'description' => '',
    'logo' => 
    array (
      0 => '',
    ),
    'version' => '1.0.0',
    'auteur' => 'Rainer',
    'auteur_lien' => 'https://websimple.be',
    'licence' => 'GNU/GPL',
    'categorie' => 'squelette',
    'etat' => 'dev',
    'compatibilite' => '[3.2.0;3.2.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => '',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => 'png',
          'contenu' => 'iVBORw0KGgoAAAANSUhEUgAAA88AAAB8CAIAAADYXxXSAAAACXBIWXMAAA9hAAAPYQGoP6dpAAAAB3RJTUUH3wsVDC0oIy6ZlwAAIABJREFUeNrtXT3S5Diu1HSUMUdbY9219g5zmL3DWOOOsUdb73tGxVMoJBHETwKEqjKjjZ6eKhVFgmACxM9vPz8/G0EQBEEQBEEQCXhxCghiFf71z38c//Ovv//LOSEIgiCID8MvTgFBdKPgJxZOEARBEMRzQd82QdTR6P3vbzf21ZlNnk0QBEEQHwb6tgliDdUWwJASgiAIgvgY0LdNEHUgzyYIgiCIb8NvrElCEBl4O7PJngmCIAjiy8FIEoLIotoEQRAEQRBk2wSRRbUFx/a78MgtKSdTJwiCIIhPAuO2CSIFJ6pt4tD/+uc/GIJCEARBEGTbBEFIPFvDsEmsCYIgNKryrV1N9Z0IgmybID7nDNhizmyCIAgq0iOZPv19V7Bk2ATZNkGQapNnEwRB2LBz66MunRJr3g0SZNsE8UXnBJZq8/wgCOI7Falehe6fp8Ik+oM1SQgCw4xHNUZItQmCIGTwSpAg2yYIwsOMTVeiBEEQBFADE0QfsJckQRiQkRPJA4MgCKrWzVjQiVqUeBDo2yYIGAW/6v3IGcCrVYIgvgRuVUmeTZBtE8RnsuppWqTbQ0MQBIHVWkLn2kfoWOVXCOJz2Pbtvn3KNiYICDRFqXwHDI8QgiCUB7FDtzxIq5iGSvc20R8vQdA1ErxvCVbhIb6Qal9jSN7/8t4OZMwEEcf//vPv/e+///Hnl/Ns5T++NdX1UO58UlNnEl/Htk0WJEk28Z1U20TEeZYQhJJVHyn1kWq///NEuD+Vi7uzQYT/e/QF9Fe2Sm3JqtvEs9m2UnAp38SX4KrNRy4lFKXm5iK+jWdfIRPoKRd/KJ8eaZKPd3gdqbNSl+6amYSbeB7bFljFrTTLSkEfl0IQnc9FWZvvcj46JOjYJogTUX6TYzdFPnnB9/9c6PC+HpfTA7TM3n7Q9dqUOp/ehTeHxCPZtsCPKdDEZ1Bnx0mmzGSwPpkBWsS3kewMjFh1ksM77kVyfzeSQfgIxbJTZ6GXu9LxTxCt2XaBYUoQH0DZg2ch9wjxtUh1Od86ubeSUJPrpgZuc4e366Fn8TQ45EjEGUxCfC/bJqUgmutx4LcEBwy3A0FYSbbe/z192vUDKMJdv5G/82J5VN+J1+wE2faNJqLF+SztNj1RHD0Iuqlv/cvqZX56AHAXEAUkrJuY3RLcUZi19cl6En/6FtbJLac8box8CCtVa9IkQTyAbWOFFW6DPjrtsvPgpyt162B41kKMKmRviltLpX0CEXjmFhNTM9i0YdfK0i23BsZwK2n373/8efz1COGWd+hCz+tUNp6lW46Fw0falXqSeCrbhhwMps6rU1+jrLymfoX6E1FTLQ44ck25DL2Smg7jkzqTj1bKtxZTQTU1jaq0OqgN9bOkPPI1/NghD/tX9Ebg99hvU9p9JNx5jgn4KRkZ2we4e/dXuN1lfaxKgrCxbezmVNY2URYfNQ2s8vIOmxvnoGUmQ8VXByM1AaieW9+K3KkfZCqzB35YL0WjBP+vOqVuLfyphXw88m+/NSqkcOTHEXvMJz8nLfGshb4lx8d/HLFnIVzk/Y951VEetwWeaPqaLM/PMPKJR+O3n5+f63kjOJt9qWDX5ycJk9yC5JZpoX497jrSMIDRrHZwXPUMTBzNjOzvn86nz7mlnJDgasqenrUx9wJJ1RhFkDELkaDB51/Ztts7YFIF/TnWifsGma6GbZ+4dTZbdSiEoOdIfyKPlMDjaNw+7A/zDowYF9n257Nt4QCIsO1WQuM+wssurfRNhZpM7Co1IRMmJb2zDhuyLzIoUU1sknUMU9nQq6DImx4rhWUIKsTkzt47S67dTwEeSX5l4eHZ1bhTzW+9wlHmfzMtpCEV0awdY2Yez7bheuQpcmBVOsWyHtGY8ciW24uCGu+s6flW5gRhxtmHK8RNkmTAOIyu4Kg0wR7T/rWnf/za2gWr7qmP7u1Tr0cI+fY5uVH1SSrZ9qcex9/Mtk0HK1eWbBuzw0enNYROJcXCKseQUexFmY5pXayeJhZE10Ai7JUXuO4Ba1Rwqh/00Reao9A1Hk5l8lPPtpWM/HZUVsJ9tdyyj8ivYtuC8mlbk+RW1WvYAsQzRRX31Wy7nthF+tlOL7JRHtNUTYEaQ4d3AboBIm9XU+HLWhelTzjTEw/sx/HUvBGuiihYxbYFwj1l29nZTaadCFFiH7lz13p/hRQ1/R0yFfX2iXePEttOKkMWzCzBPkfOmzT1eUkyRUxHY3weIK+DDRME1rV1FMOO23VuUYxQbdN5X6+pHWfS9O3kqYhftUVK+BUfVz35FjZREk64rWw7rhAW+rZH5QQ+g980rAhcM5KCRYzn88jOL+BtpJx0Xi8hv/38/EAuxfRsBkXsTO2yrUMaVfgqtkam6h61dprJtP4KpAIMxD+NlY3sH4oozSRjKZsLYi0cX7IB9j4ntatoRlBBwTktsO1i9/aWUKhkSU0Stwl9LO4xVXd92Js7xBmbBo16Zo2FY2UypvLB+vR3k+RH2DZkzBmL8sKe1u9R5tHQUXlp4ZOa8VzL6ALdGI7BbON62EmloN2+mWnHsvfHfFLhKCfSk2oX3PwCp0VzhaK5vkANyfqck9gUtxNSPsp3nMTHudCF+abUUy9yPfNeBayb7Xp4oRROWRce5WeU89a8JXb29Mo/pHeZAd3z1u/Gp8XRV2TKAGFsO48cV4r7iN0Koia0qtJbEbef0dR11h+KecYMylBGaZblVLtyX6zydLpp2W2xYdRKjer0NT/GfKM1BVg/7oB3AEW1ZdZ+S/pR1QCXmEO+mDpTO2FgdVHTDzleP0+8gZ71mtNcM2B3Ry1HR7wO7zv9+r4uQPfEK1trAOm4/Pmj+lBe4147GwuebLchPvqA8oFL2jcql0aOuDqNVr/c77c23SpcV3+5WVJs/CjX9HZ+NFZoNmPT31wp7dUkWqk34FE0a1phSdOsZ7qy7+9ms/Cje/vIhjOc2dZnOsbwaA1TVp7LZF5iL8SyW2IrRy5YAr4IySSnbx/b0nQhaV0ak/kB3OOvhptfdvdOj0BNM/NiVtpKa0QGL8i3hpNF7vTlVmo7j7z+Ze3y5Z3KvrXTHwnCmZoR0RR0DAvkG5tbrL+8Gqm16aWWSdFrqp3qV3bLd3tnOI8Lgk+EAv/1p4a1u00G43TLSVne+VZVO8iniiNBqs+tuj0KDYIH1DlOOo05FMGv7f/Dajssw/tPjZWmvM23Xu8Wz6R77fTxDPokUeXyCR9T/vttgxJHFl28o+Rzd4SpJn2BnCsfqLm4XHKcd1j3aZBr8FK4GG//95ud738XOtRACH1ByLjVAWFlEj7hcW/Y+M+hsn6tFjVk5O4nAJdper9XIxLXX7z+MXkxNArt9rRauKwTtv1QI8ltrNxO5VoXXf1jTymMqSPUBJxs40Bt+RJcaHhpctb2kVWIeo08UJmZJEvO7Qw7HMynX1HeXF3HZlri21fTP0EwV9z1rYK0bH+jKeGu3AtXWnzLqk8fG3HuIGPeaf1GoAmKoIqVG1/jM0rVij5CpglyKDgRfOS4zE0gTJ1ePOBGBZxz/9oS8m+wBnTQDaAZ3rNcPnD/hKOKgjsEZcrwlJl21hjfqz/mKFoN4y/1VXHiDGlEW/UxhcoxxMNFlLvSrSj3HWGNGFGunW8f+YqQ3sblX5NVKqX6HbR9y3GnHHrK1DPY/yNs7+WHiGxF+0JDM2ZPX+Fk84Yi+NINT7OURzmC/uYOttyIZ/sUqdscchwxv+DUDbiBjzxbOJn0OZF6Wpna+72JXgYWLI/rHb3jDRX8XZATFl9cTVAH9kVkMyZybZo3Y8Cbq9QDRrBe8pzKexpDh7Pzls4+xZ3cp0lKNv1yuDmnhmXQUEzVG3pFN5qN49k0im53RxAFi4o8wrQbRbGOUvJ8ls/VUaU0ctzkE8C28y5A4YE4U05pTQouaBu2Srg10hyvdKbhTBvCk6oclSNev2BNre9YpkmBP5R6lOZ5Aazj0dzD7IlTBXNSrIve/uzdpQ3k1sKjjhEppz8dZLWY94xMdNN1zfQr+mKCC/v5aQi3taWao3bn1D8y6g33lJv26VCt72IqU+bwyk2Jjb7c0wgda5LAtZKDao+KMFz/01csb/TdgioZR/PDcUMNjMqK3AO6O+Y8y+KPaAesqCTt9FNdQoeQYAcpV7GMzLxVm5vO5ojAX0unA3/LV4Yvzsh9odvKX6+vLor9xcoy9u7KG5pfgUyLqeK4bCpPB6Y87qeeVLhmTmpqISj2Dsxw6pW4jbu7FjVW7ohGbDtpKlHRlhna03pTDzkIuzlB5TLnT6TISYdxfcStqXJc5GAru7nyzWpkeKgurW5rJJtOTeHIaJxy5fp+k6g5KWPqplZrVheScjaUnzlVcc04y675lBmXSNaLL0h7ILiZke2yiW8BR3fwDkzptZVfLMpCJlwNpPrYBCPvumxHvQAMq6gnhY9gpcFcxrI7kz7lvXtaID6lGdlK2aE+7sPebTzonzn1KuWJ4tFDrCnY5/6JT9od8OtEk3Eu3PFiTW751ihVf5oIt88lPyIMCxGUqwwHXxLVruyecY2/10zUr5rmLMpPCvkH9VQbIhydez51SJxyBGNd02eFq0DfLSG2fye8ls6S6D2hEp9jBjrUvZrK2OiP43S3ZnJHzIwRZT8NXl5N38ReS45YP0C0AramnrXzFDY8bIMW9de8puZiTdlAYElL6WIG2IrTK81R03K8HOaLO6vMYYAm2SvKV/AVQtlDUd3OpIzWIRDHsPUheWVPRqE4HcY2mkD35WwwiiBymD03Ocwx8iUH2FWSI+5nfdeqqYso4ta6urStJPv9hFRq/m4gn72yKEkWivAs3Jtx3+dOuDUC6Rb+W1qvH/wofhceayds25MYBO/99CZ6klD5doeyd0f9dtb0/H4BdQQkXyFooGjYodW02CusaUIFpmw+WB0Fcn9XwDxQ26CgTGHzLriCQ2gaSxCfW1TqHlztZkjvkqsebJ1dQZitcS+mwbyZ64i83pLm44evH9jDUfIIt4lqPyLessB8RUXBKhvT6OXQmnHo3qFKvjtl5BoFe5U9/SpoKqiYuDtKncY9ZSfxEJZek7oK3KGyuHritvUynZf0oNSGslfAQcggObajQWZwjvp6hcJecpgKbveeNWs+KTE370JDnymSJCQQtbsl1zypMc+CKjGYBOKb22mrNhPVNv3fN4c+1gQcserRk0efR/nUl1vUDZGRMw100GJ9vSiFCYyXs3LuUQ3BGpHLKGsWJxXuclLTr2ue/NvPz0/cPnMfe/DArLgcR7xHNTsw2+eR+vyaIvypwe6V4ponKo4fstqu8OqWGk9t0GgZZREEQ6pSzYmIRRf3rAtV8/RMd/+68itHtu3+aT2xvp7o7sKU7gCwuD/LugFl15JJcpZnti2nKBkDdqvivGPU3XA6uBBBHrypq81OLw8nvm3rFNRf7mdQq3jRsXqevVz7LCk065i6vCaRlYFi0/kPRpJUbhlIkP10IYQI9WAv6PoV17+gfleu3URCWMhO2R2hIzVplxmRuPAtibUJMyLClQEkcDuziQKPE6G4f7AGviB79yLGXenxAR+jjodsW0jQyU4W1pzK2ZQCWzm4J3tu61rI0xQOrRSZ1ZqZHPUl+dRFnO61U5SX8Ot5Blierau/RoOLn/5pyljtvSCgQI734O8pgV5e2ASS45XtHMn49REFhETuyR5KCHWWWztNjZlKTSuo9wzrumy/xN2UwZiLPJUoD+l1K9CnwtJL3scUzXzbYylYx8fK23peOZmy0zJqoaydnIYZkL7oDjkRJL6UV22YalEDpyvS8s0krtM4Fl+NXnhfa1O8TdIq32Y9Ygl3xoCF2BJTxarNG95jLbUui/T+MSAviVf9E5TMbYMbeEfJSPBuMKoWMnvxuuNbVbesK4sL9pCOM654+w5T6foz2+5WylEvl6dPmur7RHrPdibZyrEBu9xNZwySKavhOtZuKVg5TyWpptogeWWb4jy7IEhsZIf7muk4avSaOFNBC+ImWktJoG+d4mud2XLZfiCjRVVzb5VmYBpJ3qkEmQ3HdeJtkfv4GNyN4fRl/oLO1pFBFfkt9yErsNyySh6vjA0TVDTxiP54IUzl9XSeTo9XXiuov1MjIUpfXeRiF96AptsZlve7+rIntzdXphd0Z0BG1tdqW25iepkm1nB5dJDmp4UkRSwz7tMNZySE9dlNDs760Ea2raK/TvcJkUpl2HKKDY8PlLwp83QjUhS5GzmdgPI59YKco9mr7vgVoaFD0GKrp5JbyVVgE71mjVSDnGrxIO9UD6W1ofda/ah5FxOLFYRhGnO5SqqVXqWFtpO1/P+X43q+ykJYcCyuZUjWyyLH5WRGASvfeXENI/F5i7MnvI8vxlpCJJjFHjwQa+5GXr49uf/qQqqtbMeqVI6aRTLRHVTRmYiQPdGZYXp3h+qc9geNZ80m5dZYa6xm8Hv3WXU0cX3RzI5IdAhFll+/jJLGU2hOIgqRySXVqW+Hke0CP8ZAa5YGGDNddtcBP+BMT0CF86Zaj5Wn6u1VGGrylZw4yYoLJtpmLDoqEkwoS/JK3ZZlM6U/qHxUGxjZo29GFRQFd33KVAUUuTO51r9zUO0pqYpw7qRmZvUuCniAO/aUmjaUCTaxAiqiuNAWc6kgbqOu5c/4yP3xIY4Hyp0sNWKQ540DHp3YuknBzmXLm8zrjaUtcNPuaFZtPU2st50aw+a2SMYWuywNGva+S9HsHereRy/HQOupdlxN6HWBqURAmSaFaEnUfEZqpgKdr3Hfhhyr0Kem6dPvKOIhUhpX95RqW4tIZPhaHO3fFnI1PWFVkm83IQY+9vaH4K7xtXu2Jl58VVfFbCag55Fl7qrTLwaTLPX/XpZw76haARGGDMVoY9tNQh41MzLdPEldLfbKa9Zlq+8Oc62/EyEWTYIIIxRfH72z6vKxrPWXfpfBfxFbFMgdHpZ9tJeRCbf96ftRiNNa34A9G45f1NeZTWqqGr9xdVt3kCYVqw5NlGu8MqoEFUbyeSbfg4zhV6vlkTe/8kIkMvWa7hJX+3Kn3a22ASQ2Lvjd4LSk5jWXEe4+XVcXiqIQmoINanIvDSoVu/kCQQzI24IkV958orC3Rbg7UO1U9etuTZKtIq6BMb5bJuXmKuPZqZsOW8bKOuYT4487ZfR5rpEGDh9DsjV8wN+5fckxUN88+ZTFNfq5aXZdq8M1o2+ZoyzGZ2Rq9jzLnwLIuTudiprgcl93HndiZbC58fVRwP14osWjwtgmh/eDqDbw8s0qBtY8Gc1lZqRGUJI8u53Q1pYdjuVeXqCzZ1MF5fOTEm0L3jcSdPpCneU7YS32nkKm7xgTAtkDkc5J9fb6Zqwtv3kDD/Issea0GB7hVxNknGohKN0q2PcS5NxRHch39VHToLfDTulTKvu5nD67sUOlElsSRQmZAX0gB7YAq/CLZbW64V4MkyPfbRwu1ITImiS3cxc//uFepciPupNhHU4ITS+MhY7qteI7qgOAvWGMO1xvXZjwLkKtIuGsqfdNiGDcKZA64QVEXHmJ19N+y2Dwe1f5hmow2Cp8U9cX0pS3j4xtYUkl3/7yRa66bWlTodsyDRa5iBsFU0GaY2Sfa8rZNs3PK7gMp6ksrswAcaVbs7WWMH6sbGV0LN8CDdXhP+qwlYEyfJuZmjQD2ToXwpKbXE0c97tvUQrmPCkwdK2zJ05889zkbR3wQalzl5hI7QKx0Dh5UGn8qRiU9fN2v0ulbzRj+aa+TmWbFxXblme5wLSCJ224FxVbJ9j3TGxECjYjXq6QeJ3MJK6/Nbhdum1R3jk1e7PU/Em9D6n3N+vvN5dIrGOnnLpJL6FE8Wp6lfQ3+FuoWnJEqlbM69JS6SBAjcFa4bsJM+5j2rnF6eU7gJeb8qjSbB2Wx9oCV/+cgiourfYGPAMvPifNA80difCpv7LwbIM39PHNBrClV5Llv31K2ZBsrb5w+4+62yy0Zpf8CjzrY62WjtzLPeVIWr6pBXdksM5s0wqAC4/eYPsix9qkZst2Owwcc/II98/Hq7AgGTUlygDLjLiXbImbJ/V9P8aNOip+4jYVkoyHE0mqZEjxLoD6i2VN1EFe3tHyuJHR++bdusOrn0GeBgnub3uOQ1azXQVAU7ZldjZPvELNE70ywaflXSGtSqVvaH9CAuyWeI6b+Pya6/r6NpZWCJmFGa0Zr78ukOkmodhJ7dP7iHrqi7gLLOa9eBPieA0sdgtGQRT4Eha+sIeDh20XB23LVDtjVRxMXTmYhT04NXmKkClVFh+9/paGT0yjyqyrZlXNy/Pnpp6bUdRKw56gym1ec+k83RcZ8+MrgLWWJsojRNFZHzOWv2It7+1+F80JgmptE6/y3tYOB44BfvIKbbnaFjWCf93np58eu8UVNQp49lQheOpt53Hf63qslenT1npisWdN2/Y8yU5NEIToVtSjniUb+lbSytYY1q2keVRxHbqa7h5bciJXkmUy4rXBGIwOTujsMJIljwpGMmQ4aJaLa/FCAINJsNy0gL9NDxRrHlpxBeSkBmSvVNEEZlYtEbgM87pMZ+WlSKaqRUddkf0wOP3FutDNwww0tSw0m27UDUvwl2OL2DzlFK+Uh1sJDGYv5DmQlkdr3A6gTwzJWtYOl1vZ3l4bQJy9SYOFmFAuoYUlt7FCu5D/aIYRicacfveVbZY1tO1WjSEYBY4tv429atQ/LUO0RjEteQXLV9E+zbWmPMMyTdeUVfF1T+ww4U1sqpoKXHv5giWCPUpk3AmxjxnL37I+cB9J51Njb9K8KVoUy/Gf9TaA9fWz84njeRGONwIS7oKS2463gARHwYlBpdkW6tzejXAn3SNM24GiLPiGPW9rehyOaGJqyvb2ERVCNPdo8r/7HPxLPEk972FGfguUsz/1NZWBMe6C3xq6fP3M/p8+J7Tm61f2fPwwlltPs5uS4keLSzZF+mYXDMaxHUwH0CjBIztJ9NZ5tKogyWjGUHkIqJrOxXcjRb0k68+PbHPE7XC6EqOISwmbTrskU0ET9x8h3JCRax6C6l6x5HBKCv8ooNodDvI8+/BjArqmzDXivVY6v49jeH++LJikMrsJkjuRIbeVmxfeEb3maUrVcevrHbkhrMpZMBj01xRAnp3UXNmRSexY/dFUOCNJHN1YIOyn8ii67dK0uUIRHLMhvCyqYkNZ2X/HvGnKshakLWeLHNwJgd1u1oLTSQf8wlP8trTOMQZjLRVe6PnWY1oKMKPwSITQB7+YpIWsi1XTIymuCoAb+XplFzF4Iu5tFEvTfwto/PtOvdMv+oi+gxBn9IcOmm2Cm19+8guy9zIY28Kjrr6NjjwS33jyqHbDS3/fgl6D4VpxGmWZxSV+pkrSWU+A4I6r0Uth+4/WFDQcMddbzv3+Rz3hflCaY1mw5dq63WUcwPHTJ49JZVC1Y39FOHeSlkj94tWNvVyAUdcjJ8lRvsuvPtvpqxqK+npZQyTsA1rKATNvjmZ3wzJScmCoVeNHGs/G49s6CN4TC+25xez4J+8VdpItE+Umzd73Qe5mQP2Zldp+pclGkw8gk1NZI+dYBaj8rm9/fQPP0QSX1+8dn4GktHY0Uv0SHlRw1R6Z+kdUbZuufWqV39uyQZCRT1MclvT6sg477uFYMmyfSCibH20JMSRNbq6mb1HgDzYRguI0LI20jJj0MWZaCCzZvMHct4x5+pVsA8DX3RYuSAVV8IACWc9Nd1G/Vl5yK39IYEnzo6feEJ0qIndQyiZWpPHVFbByiRdclUREuclVeGp0kZWPBk3A4hZ9xTXRUQKTrfWC44ScELdNjvr0jul/SLjlvKfrS3M9aiXEes6dTYVvH15WkCSPoi3xXChNsuL+0/WKSNnqy5TuNS1KmDR1kcfu350WjU3ys0DC6Dd7TKzmIBZO5xdc4wSrwRd7CJZsYLlaKurmV7MNWhEprMUyotSj0LEkh26eyJWl+CxptFng9bEmNz/rCjjbT+Pgviey6+a+7i42x4TOgmLbBQoW1aSjiVor2xqoSs/62zB3ZAWqzd/tHanDpTWKM8wrkiic2j2Z3kiiXsEdtaq0GaQ0G6Q6HrDvjDX9NlJw/inUAb61Tgw7b+u6Kxnf2kWpFanlRrsO8evMWjp0tynYj1N/5LVhSnw8MnkFEly5qLaS/WNPono1kkSIk2zOtSTpdDElFCPyMXW5khi2MAvEYRyhN3mtuHtyTmEpTemSv55upC43078qudM9z0pFVi8e9c4h9+BTM+oivBCbh1c282X5ZKNpxGYxyr6DKykUygXU4H//+ff7D+Rpv//x5+nPlKNDUiSz580aivkZccCdW/Zc7dKT5/WUIwg3M/YA9M6zis1YbdVpUXZMCHvw15dvxWAyH2ok0wLnmrTuPi1CTn+6iYo1W26tOtCnQ90G3U5L0lrtjdOyNu9yenpsB62todfYjaMk9HkKRCbB136TEBau4d9L2LCjlJAsD6dmJahGpxoNjz3mylRuUiT0rVZ8kItXKF8GDFzsU+4ZJWzKQq6v/odTHr/pcylmvbwDhlT6ntOhg7cvhger8X2yFK/E567THPnpGnloYp4tacIa2fKPq7Z+bBt5+wGhb85DkZTRVNwuMZ4E4m6CGH+pYBcLYVT6Q3nhVpWDBuNdC/Osek3cuWli9R+eRiJtuu4/r+ylfYQGFNx4m5hN5T6SM/bbNPmyoZvZPTOaj1kpqWl+8srD6S9VNOlTp+RxICNPVf3Fx49pftqS2icSbuEfrz5v4Vvx3217ujmy8OvtAdMJO+qPWDCxKP3v5qbLN+mossq0qm83lYjKH3WLtLXB52t7Gq5GRvbhhC3wd7zijzjXrf/3QfF8S26a5GbyBbPnS4cCJqwI9V+TDsIORdlrom8bEu5IjvVCLn7CiZErafSDCpLo3TeV8qMPJDv17tD81v5h3xHp+Jb7gtc0C3lbAAAF5ElEQVRaM27JKaw5wsoqmBUTg7wqC0q/zHHqXhmzoFyboJsNWFymxu9rrZYoJDsv5yjK5cizhWrS8qzGa9xhIJP+bRxaB6nxlxRm8ywautDAg9CpW73hkNtuy+0u/Pd0qh3J9i7T9tNy0SPCvY1vj5Uu2FHtZyUbTtUqMtUOxkJYlwxeFmKJRp1GHGTMoZWs3qrQl/KbGQYiau2zN0zEtIozmIzw9GmajhyBpMzyuSWCvkzkvIwQ/S4S1GKl/TNyVDh6r5isYuuLdGtqvQWy4FGFaxyb3a3fOleLjxDu6b9UEuun9zOu98hYc1Hk89rhr83TKtZrxrJKoLLBY53kYreFcN45ov4c1xHKBdLUEHs9d+sCV910Clo7rq8SR59N5lOapvwtB/k2zfmpIqnb2pl+HbvEynFqNOaIKaKaOGC34dqS3jWlhzJmnpCxO8Kv2ZatHNtBa0rwhvSpUmXS3kryNAr71h/Nyy8EssnPyN07nQHNPKdSMo2dtsTJHdm/v/38/JjMUJNIXU/9jLhP1DMjUUqrLl418RuRO+XsMQc7kMsykCEebdlPtxi7z57tJttHM0U+wVgebPo4KU1KwtHTNdOFJJYUJt3g9bFtfKcSkEMry+rJvDPPmx43YDTxnO644ttwo9OYp+3ofeJ0VBH3bFtDaASlfzs7jzg+H0dZ4NHSj2NXcLnKFlRhN6HqD34APfpCtq1ZRH1gtyk8rLl93nnJpjzjOrc1ZUbL2LZwrdqwf1wwIm7EiDQcCTL4pKa/KJacZHMWxA75qgfq5/avv/87Z9sjzfupGlkTpuzTXNbkUdNCfsyc+7QhXK1HnO4ai39qnRYPvqGpufA2LOIaRJEJ6xk5OvaUMWak1A/1rSSxzOKNllRvLu6+Edh2ng0zZdV6BaWnK5A7DUi6zkh4lO+SGj0S2UeqSJLvvFWUQ2IEOqXxIQnuf43V+HmrsPzsdxg5U/3YxDTV8Llv2OOmq1iT91d/8JDUErKIJnnverLtPM0TzO1OshP062gl3Au9VHBDCDW2gnabGLbdk3hV+pxM2sGqMiKf/3g+VBPuvwVuLR63HB02Tp9J0Jc1MOlxzaUq2fYHKyuUK8dHuFuJlmlymtyqWRcUfiepJ9ya1XeUT3jcraZPzHwkO05FVrJtQVg1N6Q8vb6KIY3MG1M3FgpPQ+ZRPE4uOpEh86Psq5HCGV1vMst5FetY+5ru/Egf215yGpoyNQsuRqbX0di7kTVsm6SHQLFt+X9RtHp6I2T+weUjniXzGjX1bcKclyUJSTPtthzwOqprDR5lPjfkoqbV3YgwjDX1thv2dSN6YtqiTPhf5GoEQRScYqNSFd+sgoqbyWuYdPZyoNi8pt5fHoO6LYQ39Ukrm+CYOnWYJK2MUgrsQn6djnHbBEE8Cxo/H0EQyt30oF3TZL938FtHpsJReFF+5WBRXZlHPugeEiifQRl7cC9JgiC6Ue2NN1cEgSMHGU9TRpb7PrAKHdjeaWJTraa8btb6TszbA50p09jxvFemb5sgCIIgOtquV2o1rTVparjDPkerrCl5ia1Jk1wa9+bSbDEIyLYJgiAIoi8bMHUGJff6ALa9GauUcMUhS5M6jWTbBEEQBPGAI1/P1YiHsvBNcTux6bIYiVYg2yYIgiAIgujFtjd1ZHx2Szgijl+cAoIgCIIgiG746+//sqYk2TZBEARBEARhg6mcyzG25MS/CbJtgiAIgiAIYkK1T6Eg7z8jwn0K7if5fgRYb5sgCIIgCKIR/95E/7eyNTrRB/RtEwRBEARBEATZNkEQBEEQxMNxdT/TIf3xYAVAgiAIgiCIjrA2ac/u0kL4wLhtgiAIgiCIjjBRZ1OpE6ISjCQhCIIgCIIgCLJtgiAIgiCI5+Na448g2yYIgiAIgiBaM/iNCZddwbhtgiAIgiCINbR4d3KTKH8w6NsmCIIgCIJowcKJjwQrABIEQRAEQayn2leH9xvXMn+nr78/wPJ/ZNsEQRAEQRAEjJ0LjJxohf8DoBlhRcaoSwQAAAAASUVORK5CYII=',
        ),
      ),
    ),
    'objets' => 
    array (
    ),
  ),
);
