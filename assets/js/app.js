/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
import('../css/app.scss');
require('bootstrap');

// any CSS you require will output into a single css file (app.css in this case)

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');

var $collectionHolder;

// setup an "add a tag" link
var $addBookButton = $('<button type="button" class="btn btn-primary add_book_link">Add a book</button>');
var $newLinkTr = $('<tr></tr>').append($addBookButton);

$(document).ready(function() {
// FORM EMBED
    // Get the ul that holds the collection of tags
    $collectionHolder = $('table.books');

    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newLinkTr);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);

    $addBookButton.on('click', function(e) {
        // add a new tag form (see next code block)
        addBookForm($collectionHolder, $newLinkTr);
    });

    // add a delete link to all of the existing tag form li elements
    // $collectionHolder.find('tr.new').each(function() {
    //     addTagFormDeleteLink($(this));
    // });

    function addBookFormDeleteLink($bookFormTr) {
        var $removeFormButton = $('<td><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>');
        $bookFormTr.append($removeFormButton);

        $removeFormButton.on('click', function(e) {
            // remove the li for the tag form
            $bookFormTr.remove();
        });
    }


    function addBookForm($collectionHolder, $newLinkLi) {
        // Get the data-prototype explained earlier
        var prototype = $collectionHolder.data('prototype');

        // get the new index
        var index = $collectionHolder.data('index');

        var newForm = prototype;
        // You need this only if you didn't set 'label' => false in your tags field in TaskType
        // Replace '__name__label__' in the prototype's HTML to
        // instead be a number based on how many items we have
        // newForm = newForm.replace(/__name__label__/g, index);

        // Replace '__name__' in the prototype's HTML to
        // instead be a number based on how many items we have
        newForm = newForm.replace(/__name__/g, index);

        // increase the index with one for the next item
        $collectionHolder.data('index', index + 1);

        // Display the form in the page in an li, before the "Add a tag" link li
        var $newFormTr = $('<tr class="new"></tr>').append(newForm);
        $newLinkLi.before($newFormTr);

        addBookFormDeleteLink($newFormTr);
    }
// FORM EMBED


});
