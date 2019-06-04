@extends('layouts.app')

<ul class="buttonHome">
    <a class="btn btn-home text-white" role="button" href="/">Home</a>
</ul>

<div class="wrapper parallax">
    <div class="homeTitle">
        <p>INTERESTS</p>
    </div>

    <div class="mention">
        <a style="text-decoration:none; color: white">
            <p><i id="arrow" class="material-icons">keyboard_arrow_down</i>scroll down to see my interests<i id="arrow" class="material-icons">keyboard_arrow_down</i></p>
        </a>
    </div>

    <div class="interestsBackground bg-elegant-color-darkbg-dark">
        <div class="interestsItem">
            <div class="interestsImageWrapper">
                <img class="interestsImage" src="images/porsche.jpg">
            </div>
            <div class="cardText">
                <p>Porsche 911s</p>
            </div>
        </div>

        <div class="interestsItem">
            <div class="interestsImageWrapper">
                <img class="interestsImage" src="images/ford_mustang.jpg">
            </div>
            <div class="cardText">
                <p>Ford Mustang Fastback 1967</p>
            </div>
        </div>

        <div class="interestsItem">
            <div class="interestsImageWrapper">
                <img class="interestsImage" src="images/singer.jpg">
            </div>
            <div class="cardText">
                <p>Singer Vehicle Design builds the ultimate porsche. They combine multiple porsches into one stunning machine.</p>
            </div>
        </div>

        <div class="interestsItem">
            <div class="interestsImageWrapper">
                <img class="interestsImage" src="images/bronco.jpg">
            </div>
            <div class="cardText">
                <p>Ford Bronco</p>
            </div>
        </div>

        <div class="interestsItem">
            <div class="interestsImageWrapper">
                <img class="interestsImage" src="images/drum.jpg">
            </div>
            <div class="cardText">
                <p>I have played drums for about 9 years.</p>
            </div>
        </div>

        <div class="interestsItem">
            <div class="interestsImageWrapper">
                <img class="interestsImage" src="images/tech.jpg">
            </div>
            <div class="cardText">
                <p>I always liked technology.</p>
            </div>
        </div>
    </div>
</div> 