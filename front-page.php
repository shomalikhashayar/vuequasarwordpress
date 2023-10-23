<?php
get_header();
?>

<body <?php body_class(); ?>>
    <div id="q-app">
        <q-card class="bg-primary text-white q-ma-md">
            <q-card-section>
            <span class="text-h6">Hello from Qausar</span>
            </q-card-section>
            <q-card-actions class="row justify-end">
                <q-btn round>
                    <q-icon name="o_person" size="md"/>
                </q-btn>
            </q-card-actions>
        </q-card>
    </div>

    <?php get_footer(); ?>
    
