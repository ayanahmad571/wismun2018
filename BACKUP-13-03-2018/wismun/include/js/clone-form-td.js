
$(function () {
    $('#btnAdd').click(function () {
        var num     = $('.clonedInput').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#entry' + num).clone().attr('id', 'entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */



        newElem.find('.jr_id_munex').attr('id', 'jr_id_munex' + newNum).attr('value', 'jr_id_munex' + newNum).val(newNum);




        

        // examination_passed1 - text
        newElem.find('.jr_mun_munex').attr('id', 'jr_mun_munex' + newNum).attr('name', 'jr_mun_munex' + newNum).val('');


        // collage1 - text
        newElem.find('.jr_ins_munex').attr('id', 'jr_ins_munex' + newNum).attr('name', 'jr_ins_munex' + newNum).val('');

        // board - text
        newElem.find('.jr_posi_munex').attr('id', 'jr_posi_munex' + newNum).attr('name', 'jr_posi_munex' + newNum).val('');
		
        // year_enter - text
        newElem.find('.jr_awr_munex').attr('id', 'jr_awr_munex' + newNum).attr('name', 'jr_awr_munex' + newNum).val('');
		
		

		
		


    // Insert the new element after the last "duplicatable" input field
        $('#entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        if (newNum == 20)
        $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
            {
                var num = $('.clonedInput').length;
                // how many "duplicatable" input fields we currently have
                $('#entry' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd').attr('disabled', false).prop('value', "Add More");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd').attr('disabled', false);
    // Disable the "remove" button
    $('#btnDel').attr('disabled', true);
});





//Second



//third button


$(function () {
    $('#btnAdd2').click(function () {
        var num     = $('.clonedInput2').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#dependants_entry' + num).clone().attr('id', 'dependants_entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */


	     // dependants_name - text

         newElem.find('.id_frm').attr('for', 'id_frm' + newNum);
        newElem.find('.id_frm').attr('id', 'id_frm' + newNum).attr('value', 'id_frm' + newNum).val(newNum);



        newElem.find('.eml_frm').attr('for', 'eml_frm' + newNum);
        newElem.find('.eml_frm').attr('id', 'eml_frm' + newNum).attr('name', 'eml_frm' + newNum).val('');


        // dependants_dob - text
        newElem.find('.cntc_frm').attr('for', 'cntc_frm' + newNum);
        newElem.find('.cntc_frm').attr('id', 'cntc_frm' + newNum).attr('name', 'cntc_frm' + newNum).val('');

        // dependants_relationship - text
        newElem.find('.nme_frm').attr('for', 'nme_frm' + newNum);
        newElem.find('.nme_frm').attr('id', 'nme_frm' + newNum).attr('name', 'nme_frm' + newNum).val('');
		


    // Insert the new element after the last "duplicatable" input field
        $('#dependants_entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel2').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        if (newNum == 5)
        $('#btnAdd2').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel2').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
            {
                var num = $('.clonedInput2').length;
                // how many "duplicatable" input fields we currently have
                $('#deligate' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel2').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd2').attr('disabled', false).prop('value', "Add More");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd2').attr('disabled', false);
    // Disable the "remove" button
    $('#btnDel2').attr('disabled', true);

});




//fourth button


$(function () {
    $('#btnAdd3').click(function () {
        var num     = $('.clonedInput3').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#particulars_entry' + num).clone().attr('id', 'particulars_entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */





         newElem.find('.id_msc').attr('for', 'id_msc' + newNum);
        newElem.find('.id_msc').attr('id', 'id_msc' + newNum).attr('value', 'id_msc' + newNum).val(newNum);


	     // dependants_name - text
        newElem.find('.nme_msc').attr('for', 'nme_msc' + newNum);
        newElem.find('.nme_msc').attr('id', 'nme_msc' + newNum).attr('name', 'nme_msc' + newNum).val('');


        // dependants_dob - text
        newElem.find('.eml_msc').attr('for', 'eml_msc' + newNum);
        newElem.find('.eml_msc').attr('id', 'eml_msc' + newNum).attr('name', 'eml_msc' + newNum).val('');

        // dependants_relationship - text
        newElem.find('.cntc_msc').attr('for', 'cntc_msc' + newNum);
        newElem.find('.cntc_msc').attr('id', 'cntc_msc' + newNum).attr('name', 'cntc_msc' + newNum).val('');
		


    // Insert the new element after the last "duplicatable" input field
        $('#particulars_entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel3').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        if (newNum == 5)
        $('#btnAdd3').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel3').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
            {
                var num = $('.clonedInput3').length;
                // how many "duplicatable" input fields we currently have
                $('#particulars_entry' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel3').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd3').attr('disabled', false).prop('value', "Add More");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd3').attr('disabled', false);
    // Disable the "remove" button
    $('#btnDel3').attr('disabled', true);

});



//Fifth button


$(function () {
    $('#btnAdd4').click(function () {
        var num     = $('.clonedInput4').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#delegatespin' + num).clone().attr('id', 'delegatespin' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */

//         newElem.find('.particularsrowno').attr('for', 'particularsrowno' + newNum);
//         newElem.find('.particularsrowno').attr('id', 'particularsrowno' + newNum).attr('value', 'particularsrowno' + newNum).val(newNum);


	     // faculty_id- text
        newElem.find('.id_delp').attr('for', 'id_delp' + newNum);
        newElem.find('.id_delp').attr('id', 'id_delp' + newNum).attr('value', 'id_delp' + newNum).val(newNum);





        // wing_id - text
        newElem.find('.name_delp').attr('for', 'name_delp' + newNum);
        newElem.find('.name_delp').attr('id', 'name_delp' + newNum).attr('name', 'name_delp' + newNum).val('');

        // profile_id - text
        newElem.find('.com_delp').attr('for', 'com_delp' + newNum);
        newElem.find('.com_delp').attr('id', 'com_delp' + newNum).attr('name', 'com_delp' + newNum).val('');
		

    // Insert the new element after the last "duplicatable" input field
        $('#delegatespin' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel4').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        if (newNum == 20)
        $('#btnAdd4').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel4').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
            {
                var num = $('.clonedInput4').length;
                // how many "duplicatable" input fields we currently have
                $('#delegatespin' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel4').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd4').attr('disabled', false).prop('value', "Add More");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd4').attr('disabled', false);
    // Disable the "remove" button
    $('#btnDel4').attr('disabled', true);

});






$(function () {
    $('#btnAdd5').click(function () {
        var num     = $('.clonedInput5').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#employer_entry' + num).clone().attr('id', 'employer_entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */


        newElem.find('.id_munex').attr('id', 'id_munex' + newNum).attr('value', 'id_munex' + newNum).val(newNum);




        

        // examination_passed1 - text
        newElem.find('.mun_munex').attr('id', 'mun_munex' + newNum).attr('name', 'mun_munex' + newNum).val('');


        // collage1 - text
        newElem.find('.ins_munex').attr('id', 'ins_munex' + newNum).attr('name', 'ins_munex' + newNum).val('');

        // board - text
        newElem.find('.posi_munex').attr('id', 'posi_munex' + newNum).attr('name', 'posi_munex' + newNum).val('');
		
        // year_enter - text
        newElem.find('.awr_munex').attr('id', 'awr_munex' + newNum).attr('name', 'awr_munex' + newNum).val('');
		
		

		
		


    // Insert the new element after the last "duplicatable" input field
        $('#employer_entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel5').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        if (newNum == 20)
        $('#btnAdd5').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel5').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
            {
                var num = $('.clonedInput5').length;
                // how many "duplicatable" input fields we currently have
                $('#employer_entry' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel5').attr('disabled', true);
                // enable the "add" button
                $('#btnAdd5').attr('disabled', false).prop('value', "Add More");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd5').attr('disabled', false);
    // Disable the "remove" button
    $('#btnDel5').attr('disabled', true);
});


