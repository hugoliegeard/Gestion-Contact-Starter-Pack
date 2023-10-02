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
                                <a class="btn btn-danger" href="contact-delete.php?ID=XXX">
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

<!-- footer -->
<?php include 'partials/_footer.php' ?>
