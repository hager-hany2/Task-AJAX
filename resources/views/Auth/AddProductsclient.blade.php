@section('title','Add product')
@section('content')

    <div>
        <h3>Add product</h3>
        <form action="{{ route('products.store') }}" method="POST" onchange="fetchQuestions(this.value)">
            {{--        on change to porcess event fetchQuestions--}}
            @csrf
            <div class="form-group">
                <label for="name">product_name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="category">Select Categories</label>
                <select id="category" name="category_id" class="form-control" >
                    <option value="">Select Categories</option>

                </select>
            </div>

            <div id="dynamic-questions">
                {{--         question--}}
            </div>

            <button id="add" type="submit" class="btn btn-primary">Add product</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </div>
    <script>
        document.getElementById('category').addEventListener('change', function() {
            let Id = this.value;
            fetchQuestions(Id);
        });

        function fetchQuestions(Id) {
            if (Id) {
                $.ajax({
                    url: `/categories/${Id}/questions`,
                    method: 'GET',
                    success: function (data) {
                        $('#dynamic-questions').empty();

                        data.forEach(function (data) {
                            let inputType = data.data_type === 'text' ? 'text' : 'select';
                            let input = `<input type="${inputType}" name="answers[${data.id}]" class="form-control" ${data.is_required ? 'required' : ''}>`;

                            $('#dynamic-questions').append(`
                        <div class="form-group">
                            <label>${data.data_text}</label>
                            ${input}
                        </div>
                    `);
                        });
                    },
                    error: function (reject) {
                        alert('not success');
                    }
                });
            } else {
                $('#dynamic-questions').empty();
            }
        }
    </script>


@endsection
