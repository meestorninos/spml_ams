//created


//archived button 
function archive()
{
  Swal.fire({
    title: 'Are you sure?',
    text: 'This account will be moved to archived!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, move to archived!',
    cancelButtonText: 'No, keep it'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Archived!',
        'Successfully moved to archived!',
        'success'
        )

    } else if (result.dismiss === Swal.DismissReason.cancel) {
      Swal.fire(
        'Cancelled',
        'You cancelled the migration',
        'error'
        )
    }
  })
}


      //unarchived button 
      function retrieve()
      {
        Swal.fire({
          title: 'Are you sure?',
          text: 'This account will be retrieved!',
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, retrieve it!',
          cancelButtonText: 'No, do not retrieve it'
        }).then((result) => {
          if (result.value) {
            Swal.fire(
              'Success!',
              'Successfully retrieved!',
              'success'
              )

          } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire(
              'Cancelled',
              'You cancelled the retrieving process',
              'error'
              )
          }
        })
      }



// active button
function active()
{
  Swal.fire({
    title: 'Are you sure?',
    text: 'This account will be set to inactive!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, set it!',
    cancelButtonText: 'No, do not set it'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Success!',
        'The account is set to inactive',
        'success'
        )

    } else if (result.dismiss === Swal.DismissReason.cancel) {
      Swal.fire(
        'Cancelled',
        'The account is still active',
        'error'
        )
    }
  })
}




//inactive button

function inactive()
{
  Swal.fire({
    title: 'Are you sure?',
    text: 'This account will be set back to active!',
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, set it!',
    cancelButtonText: 'No, do not set it'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Success!',
        'The account is set back to active',
        'success'
        )

    } else if (result.dismiss === Swal.DismissReason.cancel) {
      Swal.fire(
        'Cancelled',
        'The account is still inactive',
        'error'
        )
    }
  })
}

