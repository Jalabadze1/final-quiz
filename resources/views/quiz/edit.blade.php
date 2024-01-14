<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Quizzes</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand h1" href={{ route('quiz.index') }}>Quizzes</a>
        <div class="justify-end ">
            <div class="col ">
                <a class="btn btn-sm btn-success" href={{ route('quiz.create') }}>Add Quiz</a>
            </div>
        </div>
    </div>
</nav>
<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Add question to Quiz</h3>
            <form action="{{ route('quiz.update', $quiz->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                           value="{{ $quiz->title }}" required>
                </div>
                <div class="form-group">
                    <label for="body">Description</label>
                    <textarea class="form-control" id="body" name="body" rows="3" required>{{ $quiz->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="question">Question</label>
                    <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="answer_1">first answer</label>
                    <input type="text" class="form-control" id="answer_1" name="answer_1" required>
                    <input type="checkbox" id="check_answer_1" name="check_answer_1">
                    <label for="check_answer_1">Check this box if the answer is correct</label>
                </div>

                <div class="form-group">
                    <label for="answer_2">second answer</label>
                    <input type="text" class="form-control" id="answer_2" name="answer_2" required>
                    <input type="checkbox" id="check_answer_2" name="check_answer_2">
                    <label for="check_answer_2">Check this box if the answer is correct</label>
                </div>

                <div class="form-group">
                    <label for="answer_3">third answer</label>
                    <input type="text" class="form-control" id="answer_3" name="answer_3" required>
                    <input type="checkbox" id="check_answer_3" name="check_answer_3">
                    <label for="check_answer_3">Check this box if the answer is correct</label>
                </div>

                <div class="form-group">
                    <label for="answer_4">fourth answer</label>
                    <input type="text" class="form-control" id="answer_4" name="answer_4" required>
                    <input type="checkbox" id="check_answer_4" name="check_answer_4">
                    <label for="check_answer_4">Check this box if the answer is correct</label>
                </div>

                <button type="submit" class="btn mt-3 btn-primary">Add question to Quiz</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
