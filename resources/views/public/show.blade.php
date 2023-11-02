<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        tr,
        th {
            border: 3px solid black;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container-fluid">
            <div class="table-responsive border">
                <table class="table border border-black border-3 table-primary">
                    <thead>
                        <tr>
                            <th scope="col-6" style="width: 30%">key</th>
                            <th scope="col-6" style="width: 70%">value</th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr class="">
                            <td scope="row">title</td>
                            <td>{{ $project->project_title }}</td>

                        </tr>

                        <tr class="">
                            <td scope="row">image</td>
                            <td><img width="50%" src="{{ url('/uploads/project_img/' . $project->project_img) }}"
                                    alt="">{{ url('/uploads/project_img/' . $project->project_img) }}
                            </td>

                        </tr>

                        <tr class="">
                            <td scope="row">description</td>
                            <td>{{ $project->description }}</td>

                        </tr>
                        <tr class="">
                            <td scope="row">category</td>
                            <td>{{ $project->category }}</td>

                        </tr>
                        <tr class="">
                            <td scope="row">technologies used</td>
                            <td>{{ $project->technologies_used }}</td>

                        </tr>

                        <tr class="">
                            <td scope="row">tags</td>
                            <td>{{ $project->tags }}</td>

                        </tr>

                        <tr class="">
                            <td scope="row">Github url</td>
                            <td>{{ $project->github }}</td>

                        </tr>

                        <tr class="">
                            <td scope="row">url (yes?no)</td>
                            <td>{{ $project->url_no_url }}</td>

                        </tr>

                        <tr class="">
                            <td scope="row">Main Url</td>
                            <td>{{ $project->main_url }}</td>

                        </tr>

                        <tr class="">
                            <td scope="row">project Files</td>
                            <td>{{ url('/uploads/project_files/' . $project->project_files) }}</td>

                        </tr>

                        <tr class="">
                            <td scope="row">Date</td>
                            <td>{{ $project->date }}</td>

                        </tr>

                    </tbody>
                </table>
            </div>

        </div>





    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
