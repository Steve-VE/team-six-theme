# FooDog


## Equipe n°6 :
 
    MMP""MM""YMM `7MM"""YMM        db      `7MMM.     ,MMF'      .M"""bgd `7MMF'`YMM'   `MP' 
    P'   MM   `7   MM    `7       ;MM:       MMMb    dPMM       ,MI    "Y   MM    VMb.  ,P   
         MM        MM   d        ,V^MM.      M YM   ,M MM       `MMb.       MM     `MM.M'    
         MM        MMmmMM       ,M  `MM      M  Mb  M' MM         `YMMNq.   MM       MMb     
         MM        MM   Y  ,    AbmmmqMA     M  YM.P'  MM mmmmm .     `MM   MM     ,M'`Mb.   
         MM        MM     ,M   A'     VML    M  `YM'   MM       Mb     dM   MM    ,P   `MM.  
       .JMML.    .JMMmmmmMMM .AMA.   .AMMA..JML. `'  .JMML.     P"Ybmmd"  .JMML..MM:.  .:MMa.

- Steve Van Essche -  [https://github.com/Steve-VE](https://github.com/Steve-VE)

- Philippe Hennaux -  [https://github.com/PHennaux115](https://github.com/PHennaux115)

- Daniel Muyshond -  [https://github.com/dmshd](https://github.com/dmshd)

- Félicien Manzi - [https://github.com/gitmanfel](https://github.com/gitmanfel)

- Jacques Bernard - [https://github.com/Bernardjacques](https://github.com/Bernardjacques)


## Date de début : 26 Mars 2018 


- *Lundi 26 mars*
  - Mise en place [GitHub](https://github.com/Steve-VE/team-six)
  - Mise en place [Trello](https://trello.com/b/JnTiSL6a/le-blog-foodog)
  - Installation de Wordpress
  - Recherche de thême concordant
  - ...
  
- *Mardi 27 mars*
  - Abandon du thème
  - Création d'un thème vierge
  - Structuration des fichiers de thème
  - Header/footer/body - v1
  - ...
  
- *Mercredi 28 mars*
  - Body (html/css)- v2
  - Footer (html/css) - Fini
  - Functions.php V1
  - ...
  
- *Jeudi 29 mars*
  - Menu-Hamburger - Fini
  - Ajout du theme dans le server BeCode - Sneak peek v1
  - Header - v2
  - Correction d'erreurs, nettoyage des fichers.
  - ...
  
- *Vendredi 30 mars*
  - Modification du Header/Footer
  - Modification des fichers SCSS
  - ...

-  *Mardi 03 avril*  
  - Rédaction de contenu (10 posts par catégorie)
  - import d'images Unsplash
  - WIP Home.php, sidebar.php, single.php

-  *Jeudi 05 avril*
  - WIP Home.php, single.php
  


## Notes 
### PHP 
#### Functions Wordpress

`wp_query`  
`The Loop`
`La variable globale $post`

### SASS  
#### @mixin nom($arg)  
```css
@mixin orangecircle($size){
    @include noselect();
    display: block;
    background-color: $color-orange;
    height: $size;
    width: $size;
    border-radius: 50%;
    p {
        line-height: $size;
        text-align: center;
        color: white;
        transform-origin: center;
        transform: rotate(-20deg);
        font-size: 13px;
    }
}
```   
```css
@include orangecircle(60px,60px);
```  
#### Empêcher la sélection
```css
@mixin noselect() {
  -webkit-touch-callout:  none; /* iOS Safari */
    -webkit-user-select:  none; /* Safari */
      -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Firefox */
        -ms-user-select:  none; /* Internet Explorer/Edge */
            user-select:  none; /* Non-prefixed version, currently
                                   supported by Chrome and Opera */
} 
```    
`&` : Fait référence au sélecteur dans lequel on se trouve.
```css
a{
  color: purple;

  &:hover{ // -> a:hover
    color: red;
  }
}
```

### VScode 
`alt`+`flèche haut/bas` : déplacer la ou les lignes sélectionnées vers le haut ou vers le bas

## Date de fin : xx xx 2018 

## Deadline : 11 04 2018 09:00 

    
