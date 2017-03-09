var rs_range_hpips = document.getElementById('demo-range-hpips');
noUiSlider.create(rs_range_hpips, {
    range: range_all_sliders,
    connect: 'lower',
    start: 90,
    pips: {// Show a scale with the slider
        mode: 'steps',
        density: 2
    }
});