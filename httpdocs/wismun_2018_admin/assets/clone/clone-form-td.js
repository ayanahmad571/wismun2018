//add
$(function () {
  $('#btnAdd').click(function () {
    var num     = $('.clonedInput').length, // Checks to see how many "duplicatable" input fields we currently have
    newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
    newElem = $('#add' + num).clone().attr('id', 'add' + newNum).fadeIn('slow');
    // create the new element via clone(), and manipulate it's ID using newNum value
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
    Below are examples of what forms elements you can clone, but not the only ones.
    There are 2 basic structures below: one for an H2, and one for form elements.
    To make more, you can copy the one for form elements and simply update the classes for its label and input.
    Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    
    newElem.find('.jr_id_munex').attr('id', 'jr_id_munex' + newNum).attr('value', 'jr_id_munex' + newNum).val(newNum);*/
	
	
    // examination_passed1 - text
    newElem.find('.or_ids_no').attr('id', 'or_ids_no' + newNum).attr('name', 'or_ids_no').val(newNum);
	//njk
    newElem.find('.or_pr_ppp').attr('id', 'or_pr_ppp' + newNum).attr('name', 'or_pr_ppp' + newNum).val('');
    // collage1 - text
    newElem.find('.or_pr_qty').attr('id', 'or_pr_qty' + newNum).attr('name', 'or_pr_qty' + newNum).val('');
    // board - text
    newElem.find('.pr_id').attr('id', 'pr_id' + newNum).attr('name', 'pr_id' + newNum).val('');
    // year_enter - text
   
    // Insert the new element after the last "duplicatable" input field
    $('#add' + num).after(newElem);
    $('#ID' + newNum + '_title').focus();
    // Enable the "remove" button. This only shows once you have a duplicated section.
    $('#btnDel').attr('disabled', false);
    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
	 myFunct(newNum);
    if (newNum == 20)
    $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit");
    // value here updates the text in the 'add' button when the limit is reached 
  }
                    );
  $('#btnDel').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
    if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
    {
      var num = $('.clonedInput').length;
      // how many "duplicatable" input fields we currently have
      $('#add' + num).slideUp('slow', function () {
        $(this).remove();
        // if only one element remains, disable the "remove" button
        if (num -1 === 1)
          $('#btnDel').attr('disabled', true);
        // enable the "add" button
        $('#btnAdd').attr('disabled', false).prop('value', "Add More");
      }
                               );
    }
    return false;
    // Removes the last section you added
  }
                    );
  // Enable the "add" button
  $('#btnAdd').attr('disabled', false);
  // Disable the "remove" button
  $('#btnDel').attr('disabled', true);
}
 );


//gfde


$(function () {
  $('#btnAdd2').click(function () {
    var num     = $('.cloneddInput').length, // Checks to see how many "duplicatable" input fields we currently have
    newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
    newElem = $('#make' + num).clone().attr('id', 'make' + newNum).fadeIn('slow');
    // create the new element via clone(), and manipulate it's ID using newNum value
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
    Below are examples of what forms elements you can clone, but not the only ones.
    There are 2 basic structures below: one for an H2, and one for form elements.
    To make more, you can copy the one for form elements and simply update the classes for its label and input.
    Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    
    newElem.find('.jr_id_munex').attr('id', 'jr_id_munex' + newNum).attr('value', 'jr_id_munex' + newNum).val(newNum);*/
	
	
    // examination_passed1 - text
    newElem.find('.o_or_ids_no').attr('id', 'o_or_ids_no' + newNum).attr('name', 'o_or_ids_no').val(newNum);
	//njk
    newElem.find('.or_pr_ppp').attr('id', 'or_pr_ppp' + newNum).attr('name', 'or_pr_ppp' + newNum).val('');
    // collage1 - text
    newElem.find('.or_pr_spcl').attr('id', 'or_pr_spcl' + newNum).attr('name', 'or_pr_spcl' + newNum).val('');
    // collage1 - text
    newElem.find('.or_pr_qty').attr('id', 'or_pr_qty' + newNum).attr('name', 'or_pr_qty' + newNum).val('');
    // board - text
    newElem.find('.pr_id').attr('id', 'pr_id' + newNum).attr('name', 'pr_id' + newNum).val('');
    // year_enter - text
   
    // Insert the new element after the last "duplicatable" input field
    $('#make' + num).after(newElem);
    $('#ID' + newNum + '_title').focus();
    // Enable the "remove" button. This only shows once you have a duplicated section.
    $('#btnDel2').attr('disabled', false);
    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
	 myFunct(newNum);
    if (newNum == 20)
    $('#btnAdd2').attr('disabled', true).prop('value', "You've reached the limit");
    // value here updates the text in the 'add' button when the limit is reached 
  }
                    );
  $('#btnDel2').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
    if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
    {
      var num = $('.cloneddInput').length;
      // how many "duplicatable" input fields we currently have
      $('#make' + num).slideUp('slow', function () {
        $(this).remove();
        // if only one element remains, disable the "remove" button
        if (num -1 === 1)
          $('#btnDel2').attr('disabled', true);
        // enable the "add" button
        $('#btnAdd2').attr('disabled', false).prop('value', "Add More");
      }
                               );
    }
    return false;
    // Removes the last section you added
  }
                    );
  // Enable the "add" button
  $('#btnAdd2').attr('disabled', false);
  // Disable the "remove" button
  $('#btnDel2').attr('disabled', true);
}
 );
