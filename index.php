<!-- header -->
<?php include 'partials/_header.php' ?>

<div class="p-3 mx-auto text-center">
    <h1 class="display-4">Mes Contacts</h1>
</div>

<div class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow-sm">

                    <table id="contactTable" class="table">
                        <thead>
                        <tr>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tel</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>DOE</td>
                            <td>john.doe@gmail.com</td>
                            <td>07 43 17 08 25</td>
                            <td>
                                <a class="btn btn-primary" href="contact.php?ID=XXX">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-warning" href="contact-edit.php?ID=XXX">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a class="btn btn-danger"  href="javascript:deleteContact(<?= 10 ?>);">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    function deleteContact(id_contact) {
        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'contact-delete.php?ID=' + id_contact
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

</script>

<!-- footer -->
<?php include 'partials/_footer.php' ?>
