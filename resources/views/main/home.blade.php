<style>
    .animeTitle1{
        margin-top: -800px;
    }

    .animeTitle2{
        margin-bottom: -800px;
    }

    .animeTitle3{
        margin-top: -400px;
    }

    .animeTitle4{
        margin-bottom: -400px;
    }
</style>

<div class='pcTitle' style='height: 800px; justify-content: center;align-items: center;'>
    <h2 class='title propTitle'>
        <span class="animeTitle1">W</span>
        <span class="animeTitle2">e</span>
        <span class="animeTitle1">l</span>
        <span class="animeTitle2">c</span>
        <span class="animeTitle1">o</span>
        <span class="animeTitle2">m</span>
        <span class="animeTitle1">e&nbsp;</span>
        <span class="animeTitle2">t</span>
        <span class="animeTitle1">o&nbsp;</span>
        <span class="animeTitle2">m</span>
        <span class="animeTitle1">y&nbsp;</span>

        <span class="animeTitle2">e</span>
        <span class="animeTitle1">n</span>
        <span class="animeTitle2">g</span>
        <span class="animeTitle1">i</span>
        <span class="animeTitle2">n</span>
        <span class="animeTitle1">e</span>
        <span class="animeTitle2">e</span>
        <span class="animeTitle1">r</span>
        <span class="animeTitle2">i</span>
        <span class="animeTitle1">n</span>
        <span class="animeTitle2">g&nbsp;</span>

        <span class="animeTitle1">p</span>
        <span class="animeTitle2">o</span>
        <span class="animeTitle1">r</span>
        <span class="animeTitle2">t</span>
        <span class="animeTitle1">f</span>
        <span class="animeTitle2">o</span>
        <span class="animeTitle1">l</span>
        <span class="animeTitle2">i</span>
        <span class="animeTitle1">o&nbsp;</span>

        <span class="animeTitle2">s</span>
        <span class="animeTitle1">i</span>
        <span class="animeTitle2">t</span>
        <span class="animeTitle1">e</span>
        <span class="animeTitle2">!</span>
    </h2>

</div>

<div class='divTitlePhon' style='width: 100%; justify-content: center;align-items: center; overflow: hidden; height: 600px; padding-top: 400px;'>
<h2 class='titlePhon'>
    <span class="animeTitle3">W</span>
    <span class="animeTitle4">e</span>
    <span class="animeTitle3">l</span>
    <span class="animeTitle4">c</span>
    <span class="animeTitle3">o</span>
    <span class="animeTitle4">m</span>
    <span class="animeTitle3">e&nbsp;</span>
    <span class="animeTitle4">t</span>
    <span class="animeTitle3">o&nbsp;</span>
</h2>
<h2 class='titlePhon'>
    <span class="animeTitle4">m</span>
    <span class="animeTitle3">y&nbsp;</span>
    <span class="animeTitle4">e</span>
    <span class="animeTitle3">n</span>
    <span class="animeTitle4">g</span>
    <span class="animeTitle3">i</span>
    <span class="animeTitle4">n</span>
    <span class="animeTitle3">e</span>
    <span class="animeTitle4">e</span>
    <span class="animeTitle3">r</span>
    <span class="animeTitle4">i</span>
    <span class="animeTitle3">n</span>
    <span class="animeTitle4">g&nbsp;</span>
</h2>
<h2 class='titlePhon'>
    <span class="animeTitle3">p</span>
    <span class="animeTitle4">o</span>
    <span class="animeTitle3">r</span>
    <span class="animeTitle4">t</span>
    <span class="animeTitle3">f</span>
    <span class="animeTitle4">o</span>
    <span class="animeTitle3">l</span>
    <span class="animeTitle4">i</span>
    <span class="animeTitle3">o&nbsp;</span>
    <span class="animeTitle4">s</span>
    <span class="animeTitle3">i</span>
    <span class="animeTitle4">t</span>
    <span class="animeTitle3">e</span>
    <span class="animeTitle4">!</span>
</h2>

</div>





{{-- <div id="dd">
    ddddd
</div> --}}

<script>

//     anime({
//             targets: '.animeTitle',
//             opacity: [1, 0],
//             rotate: '0.5turn',
//   translateX: 650,
//   scale: 2,
//   direction: 'reverse',
//   easing: 'easeInOutSine'
// });

// anime({
//     targets: '.animeTitle',
//     top: '100px' ,
//      });
    anime({
        targets: '.animeTitle1',
        translateY: 400,
        duration: 3000,
        delay: 300
        // easing: 'easeInOutQuad'
    });

    anime({
        targets: '.animeTitle2',
        translateY: -400,
        fontColor: 'red',
        duration: 3000,
        delay: 300
        // easing: 'easeInOutQuad'
    });


    anime({
        targets: '.animeTitle3',
        translateY: 200,
        duration: 3000,
        delay: 300
        // easing: 'easeInOutQuad'
    });

    anime({
        targets: '.animeTitle4',
        translateY: -200,
        fontColor: 'red',
        duration: 3000,
        delay: 300
        // easing: 'easeInOutQuad'
    });

</script>