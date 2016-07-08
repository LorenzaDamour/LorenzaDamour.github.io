    // Scroll pour les liens du menu de navigation
    $('a[href^="#parcours"], a[href^="#realisation"], a[href^="#competences"], a[href^="#reseaux"], a[href^="#contact"]').click(function () {
        var the_id = $(this).attr("href");

        $('html, body').animate({
            scrollTop: $(the_id).offset().top
        }, 'slow');
        return false;
    });
