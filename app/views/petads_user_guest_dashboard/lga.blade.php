@extends('template.master_appidea_petads_general')
@section('content')
<div class="background">
<div class="row">
  <div class="small-12 medium-12 large-12 columns">
  <div class="category-box-location">
  	<?php
  		$location = Input::get('location');
  	?>
    <h4 class="text-center main-color-no-hover">Where is your pet ad located in {{ $location }}?</h4>
    <hr>
    <?php

      $categories = Input::get('cat');
      $location = Input::get('location');

      #BUG NOTICE HERE: $categories has quotes and i have not removed the quotes...
      switch ($categories) {
        case "dog":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Dog" . '  <i class="fa fa-hand-o-right"></i> '. $location .'
          </div>
          ';
          break;

          case "cat":
         echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Cat" . '  <i class="fa fa-hand-o-right"></i> '. $location .'
          </div>
          ';
          break;

          case "rabbit":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Rabbit" . '  <i class="fa fa-hand-o-right"></i> '. $location .'
          </div>
          ';
          break;

          case "fish":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "Fish" . '  <i class="fa fa-hand-o-right"></i> '. $location .'
          </div>
          ';
          break;

          case "other":
          echo '
          <div class="pet-cat-picked-notifier">
            <i class="fa fa-heart"></i> Pet category <i class="fa fa-hand-o-right"></i> '. "other" . '  <i class="fa fa-hand-o-right"></i> '. $location .'
          </div>
          ';
          break;
        
        default :
          echo '
          <div class="pet-cat-not-picked-notifier">
            <i class="fa fa-times-circle-o"></i> Please go back and choose a pet category. <a href="/petads" class="white-text"><i class="fa fa-long-arrow-left"></i> Back</a>
          </div>
          <style type="text/css">
          	.lga {
          		display: none;
          	}
          </style>
          ';
      }
    ?>

    <?php
    	$location = Input::get('location');

    	if (empty($location)) {
    		echo '
    		<div class="pet-cat-not-picked-notifier go-down-a-bit-20">
    			<i class="fa fa-times-circle-o"></i> Please go back and choose a pet category. <a href="/petads" class="white-text"><i class="fa fa-long-arrow-left"></i> Back</a>
    		</div>
    		<style type="text/css">
    			.lga {
    				display: none;
    			}
    		</style>
    		';
    	}
    ?>
 	
 	<div class="lga">  
    <?php 

    	$categories = Input::get('cat');
      	$location = Input::get('location');

    	switch ($location) {
    		case 'abia':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=aba_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aba North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=aba_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aba South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=arochukwu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Arochukwu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=bende"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bende
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=ikwuano"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikwuano
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=isiala_ngwa_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isiala-Ngwa North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=isiala-ngwa-south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isiala-Ngwa South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=isuikwato"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isuikwato
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=isuikwato"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isuikwato
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=obi_nwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obi Nwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=ohafia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ohafia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=osisioma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Osisioma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=ngwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ngwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=ugwunagbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ugwunagbo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=ukwa_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ukwa East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=ukwa_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ukwa West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=umuahia_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Umuahia North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=umuahia_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Umuahia South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abia&lga=umu_neochi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Umu-Neochi
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'adamawa':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=demsa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Demsa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=fufore"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Fufore
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=ganaye"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ganaye
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=gireri"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gireri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=gombi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gombi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=guyuk"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Guyuk
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=hong"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Hong
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=jada"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jada
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=lamurde"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lamurde
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=madagali"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Madagali
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=maiha"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Maiha
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=mayo_belwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mayo-Belwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=michika"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Michika
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=mubi_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mubi North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=mubi_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mubi South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=numan"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Numan
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=shelleng"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shelleng
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=song"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Song
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=toungo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Toungo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=yola_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yola North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=adamawa&lga=yola_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yola South
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'akwaibom':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=abak"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abak
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=eastern_obolo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Eastern Obolo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=eket"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Eket
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=esit_eket"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Esit Eket
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=essien_udim"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Essien Udim
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=etim_ekpo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Etim Ekpo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=etinan"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Etinan
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ibeno"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibeno
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ibesikpo_asutan"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibesikpo Asutan
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ibiono_ibom"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibiono Ibom
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ika"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ika
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ikono"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikono
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ikot_abasi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikot Abasi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ikot_ekpene"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikot Ekpene
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ini"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ini
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=itu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Itu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=mbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mbo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=mkpat_enin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mkpat Enin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=nsit_atai"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nsit Atai
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=nsit_ibom"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nsit Ibom
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=nsit_ubium"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nsit Ubium
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=obot_akara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obot Akara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=okobo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okobo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=onna"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Onna
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=oron"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oron
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=oruk_anam"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oruk Anam
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=udung_uko"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Udung Uko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=ukanafun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ukanafun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=uruan"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Uruan
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=urue_offong"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Urue-Offong/Oruko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=akwaibom&lga=uyo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i>
    				Uyo
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'anambra':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=aguata"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aguata
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=anambra_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Anambra East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=anambra_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Anambra West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=anaocha"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Anaocha
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=awka_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Awka North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=awka_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Awka South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=ayamelum"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ayamelum
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=dunukofia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dunukofia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=ekwusigo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ekwusigo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=idemili_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Idemili North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=idemili_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Idemili south
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=ihiala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ihiala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=njikoka"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Njikoka
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=nnewi_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nnewi North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=nnewi_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nnewi South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=ogbaru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogbaru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=onitsha_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Onitsha North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=onitsha_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Onitsha South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=orumba_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orumba North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=orumba_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orumba South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=anambra&lga=oyi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oyi
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'bauchi':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=alkaleri"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Alkaleri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=bauchi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bauchi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=bogoro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bogoro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=damban"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Damban
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=darazo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Darazo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=dass"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dass
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=ganjuwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ganjuwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=giade"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Giade
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=itas"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Itas/Gadau
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=jamaare"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jama are
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=katagum"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Katagum
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=kirfi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kirfi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=misau"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Misau
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=ningi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ningi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=shira"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shira
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=Tafawa_Balewa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tafawa-Balewa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=toro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Toro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=warji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Warji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bauchi&lga=zaki"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Zaki
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'bayelsa':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=brass"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Brass
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=ekeremor"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ekeremor
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=kolokuma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kolokuma/Opokuma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=nembe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nembe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=ogbia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogbia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=sagbama"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sagbama
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=southern_jaw"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Southern Jaw
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=bayelsa&lga=yenegoa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yenegoa
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'benue':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=ado"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ado
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=agatu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Agatu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=apa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Apa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=buruku"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Buruku
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=gboko"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gboko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=guma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Guma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=gwer_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwer East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=gwer_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwer West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=katsina_ala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Katsina-Ala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=konshisha"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Konshisha
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=kwande"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kwande
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=logo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Logo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=makurdi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Makurdi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=obi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=ogbadibo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogbadibo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=oju"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oju
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=okpokwu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okpokwu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=ohimini"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ohimini
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=oturkpo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oturkpo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=tarka"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tarka
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=ukum"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ukum
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=ushongo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ushongo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=benue&lga=vandeikya"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Vandeikya
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'borno':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=ado"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abadam
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=askira_uba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Askira/Uba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=bama"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bama
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=bayo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bayo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=biu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Biu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=chibok"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Chibok
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=damboa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Damboa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=dikwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dikwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=gubio"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gubio
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=guzamala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Guzamala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=gwoza"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwoza
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=hawul"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Hawul
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=jere"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jere
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=kaga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=kala_balge"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kala/Balge
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=konduga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Konduga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=kukawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kukawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=kwaya_kusar"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kwaya Kusar
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=mafa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mafa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=tarka"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Magumeri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=maiduguri"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Maiduguri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=marte"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Marte
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=mobbar"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mobbar
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=monguno"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Monguno
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=ngala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ngala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=nganzai"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nganzai
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=borno&lga=shani"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shani
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'crossriver':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=akpabuyo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akpabuyo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=odukpani"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Odukpani
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=akamkpa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akamkpa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=biase"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Biase
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=abi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=ikom"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikom
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=yarkur"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yarkur
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=odubra"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Odubra
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=boki"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Boki
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=ogoja"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogoja
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=yala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=obanliku"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obanliku
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=obudu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obudu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=calabar_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Calabar South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=etung"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Etung
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=bekwara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bekwara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=bakassi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bakassi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=crossriver&lga=calabar_municipality"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Calabar Municipality
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'delta':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=oshimili"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oshimili
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=aniocha"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aniocha
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=aniocha_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aniocha South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ika_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ika South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ika_north_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ika North-East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ndokwa_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ndokwa West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ndokwa_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ndokwa East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=isoko_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isoko south
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=isoko_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isoko North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=bomadi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bomadi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=burutu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Burutu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ughelli_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ughelli South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ughelli_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ughelli North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ethiope_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ethiope West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ethiope_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ethiope East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=sapele"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sapele
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=okpe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okpe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=warri_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Warri North
    			</h5></a></li>

    			<li><a href="post/?cat='.$categories.'&location=delta&lga=warri_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Warri South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=uvwie"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Uvwie
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=udu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Udu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=warri_central"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Warri Central
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=ukwani"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ukwani
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=oshimili_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oshimili North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=delta&lga=patani"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Patani
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'ebonyi':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=afikpo_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Afikpo South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=afikpo_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Afikpo North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=onicha"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Onicha
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ohaozara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ohaozara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=abakaliki"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abakaliki
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ishielu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ishielu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ikwo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				lkwo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ezza"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ezza
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ezza_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ezza South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ohaukwu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ohaukwu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ebonyi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ebonyi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ebonyi&lga=ivo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ivo
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'edo':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=esan_north_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Esan North-East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=esan_central"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Esan Central
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=esan_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Esan West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=egor"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Egor
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=ukpoba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ukpoba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=central"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Central
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=etsako_central"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Etsako Central
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=igueben"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Igueben
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=oredo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oredo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=ovia_southWest"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ovia SouthWest
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=ovia_south_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ovia South-East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=orhionwon"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orhionwon
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=uhunmwonde"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Uhunmwonde
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=etsako_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Etsako East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=edo&lga=esan_south_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Esan South-East
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'ekiti':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ado"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ado
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ekiti_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ekiti-East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ekiti_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ekiti-West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=emure_ise_orun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Emure/Ise/Orun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ekiti_south_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ekiti South-West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ikare"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikare
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=irepodun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Irepodun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ijero"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ijero
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ido_osi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ido/Osi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=oye"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oye
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ikole"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikole
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=moba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Moba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=gbonyin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gbonyin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=efon"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Efon
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ise_orun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ise/Orun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ekiti&lga=ilejemeje"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ilejemeje
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'enugu':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=enugu_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Enugu South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=igbo_eze_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Igbo-Eze South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=enugu_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Enugu North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=nkanu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nkanu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=udi_agwu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Udi Agwu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=oji_river"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oji-River
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=ezeagu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ezeagu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=igboeze_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				IgboEze North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=isi_uzo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isi-Uzo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=nsukka"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nsukka
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=igbo_ekiti"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Igbo-Ekiti
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=uzo_uwani"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Uzo-Uwani
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=enugu_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Enugu East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=aninri"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aninri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=nkanu_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nkanu East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=enugu&lga=udenu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Udenu
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'abuja':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=abuja&lga=gwagwalada"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwagwalada
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abuja&lga=kuje"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kuje
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abuja&lga=abaji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abaji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abuja&lga=abuja_municipal"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abuja Municipal
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abuja&lga=bwari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bwari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=abuja&lga=kwali"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kwali
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'gombe':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=akko"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=balanga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Balanga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=billiri"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Billiri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=dukku"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dukku
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=kaltungo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaltungo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=kwami"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kwami
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=shomgom"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shomgom
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=funakaye"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Funakaye
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=gombe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gombe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=nafada"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nafada/Bajoga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=gombe&lga=yamaltu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yamaltu/Delta
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'imo':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=aboh_mbaise"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aboh-Mbaise
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ahiazu_mbaise"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ahiazu-Mbaise
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ehime_mbano"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ehime-Mbano
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ezinihitte"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ezinihitte
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ideato_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ideato North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ideato_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ideato South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ihitte-uboma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ihitte/Uboma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ikeduru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikeduru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=isiala_mbano"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isiala Mbano
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=isu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=mbaitoli"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mbaitoli
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ngor_okpala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ngor-Okpala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=njaba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Njaba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=nwangele"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nwangele
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=nkwerre"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nkwerre
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=obowo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obowo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=oguta"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oguta
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=ohaji_egbema"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ohaji/Egbema
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=okigwe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okigwe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=orlu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orlu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=orsu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orsu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=oru_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oru East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=oru_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oru West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=owerri_municipal"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Owerri-Municipal
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=owerri_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Owerri North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=imo&lga=owerri_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Owerri West
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'jigawa':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=auyo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Auyo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=babura"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Babura
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=birni_kudu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Birni Kudu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=biriniwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Biriniwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=buji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Buji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=dutse"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dutse
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=gagarawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gagarawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=garki"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Garki
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=gumel"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gumel
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=guri"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Guri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=gwaram"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwaram
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=gwiwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwiwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=hadejia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Hadejia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=jahun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jahun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=kafin_hausa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kafin Hausa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=kaugama_kazaure"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaugama Kazaure
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=kiri_kasamma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kiri Kasamma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=kiyawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kiyawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=maigatari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Maigatari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=malam_madori"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Malam Madori
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=miga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Miga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=ringim"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ringim
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=roni"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Roni
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=sule_tankarkar"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sule-Tankarkar
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=taura"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Taura
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=jigawa&lga=yankwashi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yankwashi
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'kaduna':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=birni_gwari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Birni-Gwari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=chikun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Chikun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=giwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Giwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=igabi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Igabi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=ikara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=jaba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				jaba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=jema"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jema
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kachia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kachia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kaduna_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaduna North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kaduna_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaduna South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kagarko"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kagarko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kajuru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kajuru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kaura"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaura
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kauru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kauru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kubau"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kubau
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=kudan"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kudan
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=lere"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lere
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=makarfi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Makarfi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=sabon_gari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sabon-Gari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=sanga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sanga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=soba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Soba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=zango_kataf"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Zango-Kataf
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kaduna&lga=zaria"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Zaria
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'kano':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=ajingi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ajingi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=albasu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Albasu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=bagwai"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bagwai
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=bebeji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bebeji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=bichi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bichi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=bunkure"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bunkure
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=dala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=dambatta"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dambatta
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=dawakin_kudu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dawakin Kudu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=dawakin_tofa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dawakin Tofa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=doguwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Doguwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=fagge"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Fagge
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=gabasawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gabasawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=garko"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Garko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=garum"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Garum
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=mallam"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mallam
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=gaya"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gaya
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=gezawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gezawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=gwale"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwale
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=gwarzo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwarzo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=kabo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kabo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=kano_municipal"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kano Municipal
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=karaye"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Karaye
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=kibiya"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kibiya
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=kiru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kiru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=kumbotso"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kumbotso
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=kunchi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kunchi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=kura"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kura
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=madobi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Madobi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=makoda"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Makoda
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=minjibir"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Minjibir
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=nasarawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nasarawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=rano"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Rano
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=rimin_gado"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Rimin Gado
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=rogo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Rogo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=shanono"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shanono
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=sumaila"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sumaila
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=takali"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Takali
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=tarauni"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tarauni
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=tofa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tofa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=tsanyawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tsanyawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=tudun_wada"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tudun Wada
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=ungogo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ungogo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=warawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Warawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kano&lga=wudil"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wudil
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'kastina':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=bakori"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bakori
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=batagarawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Batagarawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=batsari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Batsari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=baure"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Baure
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=bindawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bindawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=charanchi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Charanchi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=dandume"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dandume
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=danja"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Danja
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=dan_musa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dan Musa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=daura"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Daura
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=dutsi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dutsi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=dutsin_ma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dutsin-Ma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=faskari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Faskari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=funtua"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Funtua
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=ingawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ingawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=jibia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jibia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=kafur"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kafur
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=kaita"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaita
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=kankara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kankara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=kankia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kankia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=katsina"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Katsina
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=kurfi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kurfi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=kusada"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kusada
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=mai_adua"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mai Adua
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=malumfashi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Malumfashi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=mani"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mani
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=mashi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mashi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=matazuu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Matazuu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=musawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Musawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=rimi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Rimi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=sabuwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sabuwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=safana"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Safana
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=sandamu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sandamu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kastina&lga=zango"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Zango
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'kebbi':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=aleiro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aleiro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=arewa_dandi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Arewa-Dandi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=argungu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Argungu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=augie"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Augie
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=bagudo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bagudo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=birnin_kebbi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Birnin Kebbi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=bunza"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bunza
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=dandi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dandi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=fakai"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Fakai
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=gwandu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gwandu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=jega"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jega
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=kalgo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kalgo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=koko_besse"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Koko/Besse
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=maiyama"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Maiyama
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=ngaski"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ngaski
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=sakaba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sakaba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=shanga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shanga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=suru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Suru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=wasagu_danko"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wasagu/Danko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=yauri"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yauri
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kebbi&lga=zuru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Zuru
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'kogi':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=adavi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Adavi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=ajaokuta"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ajaokuta
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=ankpa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ankpa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=bassa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bassa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=dekina"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dekina
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=ibaji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibaji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=idah"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Idah
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=igalamela_odolu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Igalamela-Odolu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=ijumu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ijumu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=kabba_bunu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kabba/Bunu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=kogi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kogi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=lokoja"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lokoja
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=mopa_muro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mopa-Muro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=ofu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ofu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=ogori_mangongo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogori/Mangongo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=okehi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okehi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=okene"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okene
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=olamabolo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Olamabolo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=omala"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Omala
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=yagba_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yagba East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kogi&lga=yagba_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yagba West
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'kwara':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=asa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Asa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=baruten"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Baruten
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=edu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Edu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=ekiti"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ekiti
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=ifelodun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ifelodun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=ilorin_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ilorin East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=ilorin_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ilorin West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=irepodun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Irepodun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=isin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=kaiama"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaiama
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=moro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Moro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=offa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Offa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=oke_ero"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oke-Ero
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=oyun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oyun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=kwara&lga=pategi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Pategi
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'lagos':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=agege"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Agege
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=ajeromi_ifelodun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ajeromi-Ifelodun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=alimosho"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Alimosho
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=amuwo-odofin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Amuwo-Odofin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=apapa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Apapa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=badagry"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Badagry
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=epe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Epe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=eti_osa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Eti-Osa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=lekki"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lekki
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=ifako_ijaye"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ifako-Ijaye
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=ikeja"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikeja
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=ikorodu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikorodu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=kosofe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kosofe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=lagos_island"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lagos Island
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=lagos_mainland"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lagos Mainland
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=mushin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mushin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=ojo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ojo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=oshodi_isolo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oshodi-Isolo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=shomolu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shomolu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=lagos&lga=surulere"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Surulere
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'nasarawa':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=akwanga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akwanga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=awe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Awe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=doma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Doma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=karu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Karu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=keana"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Keana
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=keffi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Keffi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=kokona"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kokona
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=lafia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lafia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=nasarawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nasarawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=nasarawa_eggon"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nasarawa-Eggon
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=obi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=toto"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Toto
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=nasarawa&lga=wamba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wamba
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'niger':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=agaie"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Agaie
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=agwara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Agwara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=bida"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bida
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=borgu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Borgu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=bosso"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bosso
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=chanchaga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Chanchaga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=edati"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Edati
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=gbako"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gbako
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=gurara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gurara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=katcha"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Katcha
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=kontagora"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kontagora
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=lapai"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lapai
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=lavun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lavun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=magama"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Magama
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=mariga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mariga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=mashegu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mashegu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=mokwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mokwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=muya"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Muya
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=pailoro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Pailoro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=rafi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Rafi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=rijau"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Rijau
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=shiroro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shiroro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=suleja"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Suleja
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=tafa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tafa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=niger&lga=wushishi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wushishi
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'ogun':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=abeokuta_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abeokuta North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=abeokuta_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abeokuta South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ado_odo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ado-Odo/Ota
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=egbado_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Egbado North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=egbado_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Egbado South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ewekoro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ewekoro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ifo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ifo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ijebu_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ijebu East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ijebu_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ijebu North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ijebu_north_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ijebu North East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ijebu_ode"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ijebu Ode
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ikenne"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikenne
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=imeko_afon"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Imeko-Afon
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ipokia"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ipokia
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=obafemi_owode"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obafemi-Owode
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=ogun_waterside"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogun Waterside
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=odeda"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Odeda
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=odogbolu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Odogbolu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=remo_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Remo North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ogun&lga=shagamu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shagamu
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'ondo':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=akoko_north_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akoko North East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=akoko_north_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akoko North West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=akoko_south_akure_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akoko South Akure East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=akoko_south_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akoko South West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=akure_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akure North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=akure_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akure South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=ese_odo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ese-Odo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=idanre"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Idanre
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=ifedore"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ifedore
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=ilaje"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ilaje
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=ile_oluji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ile-Oluji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=okeigbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okeigbo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=irele"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Irele
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=odigbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				odigbo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=okitipupa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okitipupa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=ondo_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ondo East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=ondo_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ondo West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=ose"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ose
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=ondo&lga=owo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Owo
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'osun':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=aiyedade"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aiyedade
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=aiyedire"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Aiyedire
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=atakumosa_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Atakumosa East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=atakumosa_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Atakumosa West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=boluwaduro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Boluwaduro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=boripe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Boripe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ede_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ede North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ede_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ede South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=egbedore"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Egbedore
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ejigbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ejigbo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ife_central"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ife Central
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ife_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ife East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ife_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ife North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ife_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ife South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ifedayo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ifedayo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ifelodun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ifelodun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ila"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ila
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ilesha_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ilesha East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ilesha_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ilesha West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=irepodun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Irepodun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=irewole"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Irewole
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=isokan"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isokan
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=iwo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Iwo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=obokun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obokun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=odo_otin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Odo-Otin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=ola_oluwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ola-Oluwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=olorunda"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Olorunda
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=oriade"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oriade
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=orolu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orolu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=osun&lga=osogbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Osogbo
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'oyo':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=afijio"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Afijio
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=akinyele"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akinyele
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=atiba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Atiba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=atigbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Atigbo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=egbeda"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Egbeda
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibadancentral"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				IbadanCentral
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibadan_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibadan North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibadan_north_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibadan North West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibadan_south_eastegbedore"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibadan South East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibadan_south_westejigbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibadan South West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibarapa_central"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibarapa Central
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibarapa_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibarapa East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ibarapa_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibarapa North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ido"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ido
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=irepo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Irepo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=iseyin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Iseyin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=itesiwaju"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Itesiwaju
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=iwajowa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Iwajowa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=kajola"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kajola
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=lagelu_ogbomosho_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lagelu Ogbomosho North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ogbmosho_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogbmosho South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ogo_oluwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogo Oluwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=olorunsogoiwo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Olorunsogo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=oluyole"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oluyole
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ona_ara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ona-Ara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=orelope"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orelope
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=orelope"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Orelope
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=ori_ire"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ori Ire
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=oyo_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oyo East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=oyo_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oyo West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=saki_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Saki East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=saki_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Saki West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=oyo&lga=surulere"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Surulere
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'pleateau':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=barikin_ladi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Barikin Ladi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=bassa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bassa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=bokkos"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bokkos
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=jos_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jos East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=jos_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jos North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=jos_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jos South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=kanam"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kanam
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=kanke"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kanke
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=langtang_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Langtang North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=langtang_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Langtang South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=mangu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mangu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=mikang"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Mikang
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=pankshin"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Pankshin
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=Qua_an_Pan"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Qua an Pan
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=riyom"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Riyom
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=shendam"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shendam
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=pleateau&lga=wase"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wase
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'rivers':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=abua"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Abua/Odual
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=ahoada_east"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ahoada East
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=ahoada_west"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ahoada West
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=akuku_toru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Akuku Toru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=andoni"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Andoni
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=asari_toru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Asari-Toru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=bonny"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bonny
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=degema"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Degema
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=emohua"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Emohua
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=eleme"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Eleme
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=etche"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Etche
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=gokana"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gokana
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=ikwerre"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ikwerre
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=khana"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Khana
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=obia_akpor"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Obia/Akpor
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=ogba_egbema_ndoni"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogba/Egbema/Ndoni
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=ogu_bolo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ogu/Bolo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=okrika"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Okrika
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=omumma"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Omumma
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=opobo_nkoro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Opobo/Nkoro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=oyigbo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Oyigbo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=port_harcourt"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Port-Harcourt
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=rivers&lga=tai"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tai
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'sokoto':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=binji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Binji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=bodinga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bodinga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=dange_shnsi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Dange-shnsi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=gada"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gada
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=goronyo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Goronyo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=gudu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gudu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=gawabawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gawabawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=illela"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Illela
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=isa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Isa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=kware"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kware
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=kebbe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				kebbe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=rabah"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Rabah
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=sabon_birni"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sabon birni
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=shagari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shagari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=silame"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Silame
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=sokoto_north"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sokoto North
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=sokoto_south"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sokoto South
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=tambuwal"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tambuwal
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=tqngaza"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tqngaza
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=tureta"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tureta
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=wamako"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wamako
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=wurno"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wurno
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=sokoto&lga=yabo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yabo
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'taraba':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=ardo_kola"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ardo-kola
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=bali"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bali
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=donga"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Donga
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=gashaka"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gashaka
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=cassol"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Cassol
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=ibi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ibi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=jalingo"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jalingo
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=karin_lamido"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Karin-Lamido
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=kurmi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kurmi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=lau"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Lau
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=sardauna"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Sardauna
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=takum"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Takum
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=ussa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Ussa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=wukari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Wukari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=yorro"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yorro
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=taraba&lga=zing"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Zing
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'yobe':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=bade"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bade
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=bursari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bursari
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=damaturu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Damaturu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=fika"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Fika
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=fune"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Fune
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=geidam"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Geidam
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=gujba"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gujba
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=gulani"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gulani
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=jakusko"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Jakusko
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=karasuwa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Karasuwa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=karawa"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Karawa
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=machina"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Machina
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=nangere"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nangere
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=nguru_potiskum"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Nguru Potiskum
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=tarmua"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tarmua
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=yobe&lga=yunusari"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Yunusari
    			</h5></a></li>
    		</ul>
    		';
    		break;

    		case 'zamfara':
    		echo '
    		<ul class="no-bullet go-down-a-bit-30">
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=anka"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Anka
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=bakura"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bakura
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=birnin_magaji"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Birnin Magaji
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=bukkuyum"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bukkuyum
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=bungudu"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Bungudu
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=gummi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gummi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=gusau"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Gusau
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=kaura"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Kaura
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=namoda"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Namoda
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=maradun"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Maradun
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=maru"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Maru
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=shinkafi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Shinkafi
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=talata_mafara"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Talata Mafara
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=tsafe"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Tsafe
    			</h5></a></li>
    			<li><a href="post/?cat='.$categories.'&location=zamfara&lga=zurmi"><h5 class="text-left naija-green-text pulse"><i class="fa fa-circle-thin"></i> 
    				Zurmi
    			</h5></a></li>
    		</ul>
    		';
    		break;
    		
    		default:
    			# code...
    			break;
    	}
    ?>
    </div>

  </div>
  </div>
</div>
</div>
<?php 
	
	echo"
	<script>
		document.title='Popibay || Where is your pet ad located in ". $location ."?';
	</script>
	";
?>
@stop