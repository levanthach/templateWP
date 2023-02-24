<?php
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

$form = tr_form()->useJson()->setGroup($this->getName());
?>

<h1>Theme Options</h1>
<div class="typerocket-container">
    <?php
    echo $form->open();

    // Header
    $header = function () use ($form) {
        echo $form->image('Logo Retailer');
        echo $form->image('Logo Tudor');
    };

    //Footer
    $footer = function () use ($form) {
        echo $form->image('Logo Tudor Footer');
        echo $form->row(
                $form->text('Title Column 1'),
            $form->text('Title Column 2'),
            $form->text('Title Column 3')
        );
        echo $form->row(
                $form->text('Title Location'),
                $form->image('Icon Location'),
                $form->text('Description')
        );
        echo $form->repeater('Contact')->setFields([
                $form->text('Title Contact'),
            $form->image('Icon Contact'),
            $form->text('Description')
        ]);
        echo $form->row(
                $form->text('Button'),
                $form->text('Link Button')
        );
        echo $form->text('Copyright');
    };

    // Social
    $social = function () use ($form) {
        echo $form->repeater('Social Icon')->setFields([
                $form->text('Title Social'),
                $form->text('Link'),
                $form->text('Icon'),]
        );
    };

    // not Featured Products
    $not_featured = function () use ($form) {
        echo $form->repeater('Not Featured Products')->setFields([
                $form->search('Category')->setTaxonomy('category')
            ]);
    };

    // Save
    $save = $form->submit('Save');

    // Layout
    tr_tabs()->setSidebar($save)
        ->addTab('Header', $header)
        ->addTab('Footer', $footer)
        ->addTab('Social', $social)
        ->addTab('Not Featured', $not_featured)
        ->render('box');
    echo $form->close();
    ?>

</div>