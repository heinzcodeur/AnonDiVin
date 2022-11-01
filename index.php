<?php

print_r(dirname(__DIR__).' ');die('non');
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Cave - Votre cave sur mesure</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="assets/style/index.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

</head>
<body>

<nav>
    <div>
        <a href="">
            <img id="logo" src="./assets/img/logo.jpg" alt="logo" />
        </a>
    </div>
    <ul>
        <li>
            <a href="">
                <i class="fas fa-sign-in-alt"></i>
            </a>
        </li>
    </ul>
</nav>

<div id="vue-app" class="lobby-container">

    <ul>
        <li class="name">
            <i class="fas fa-search"></i>
            <input class="search" placeholder="Entrez le nom d'un vin...">
        </li>

        <li class="country">
            <i class="fas fa-globe-europe"></i>
            <!--select v-show="inputType == 'country'" v-model="countrySelected">
                <option value="">Choisissez un pays</option>
                <option v-for="option in countryOption" :value="option.id">{{option.name}}</option>
            </select-->
        </li>

        <li class="grapes">
            <i class="fas fa-wine-glass-alt"></i>
            <!--div class="radio-container" v-if="inputType == 'grapes'">
                <div v-for="grape in grapesRadio" class="radio">
                    <label :for="grape.name">{{grape.name}}</label>
                    <input v-model="grapesSelected" :id="grape.name" :value="grape.name" type="radio" class="radio-button">
                </div>
            </div-->
        </li>
    </ul>

    <div class="wine-list">
        <div class="wine-card">
            <!--div class="card-header">
                <h2>{{wine.name}}</h2>
                <i @click="removeItem(id)" class="fas fa-times"></i>
            </div>
            <div class="container">
                <div class="text-container">
                    <div class="buttons">
                        <h4>{{wine.year}}</h4>
                        <h4>{{wine.country}}</h4>
                        <h4>{{wine.grapes}}</h4>
                    </div>
                    <div class="location">
                        <i class="fas fa-map-marker-alt"></i>
                        <span> {{wine.region}}</span>
                    </div>
                    <p>{{wine.description}}</p>
                </div>
                <img :src="getImgUrl(wine.picture)" alt="photo-bouteille">
            </div-->
        </div>
    </div>


</div>
</body>