<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="mt-5">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">


            <!-- Main modal -->

            {{-- titre et button creer --}}
            <div class="flex justify-between items-center">


                <a href="{{ route('posts.create') }}" class="bg-blue-500 rounded-md p-4 text-white text-sm">
                    Nouveau post
                </a>

            </div>
            @if (Session::get('error'))
                <div class="p-5">
                    <div class="block p-2 bg-red-500 text-white rounded-sm shadow-sm mt-2">
                        {{ Session::get('error') }}
                    </div>

                </div>
            @endif

            @if (Session::get('success'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-2 py-3 mt-5 shadow-md"
                    role="alert">
                    <div class="flex">
                        <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                            </svg></div>
                        <div>
                            <p class="font-bold">Notifcation</p>
                            <p class="text-sm">{{ Session::get('success') }}</p>
                        </div>
                    </div>
                </div>
            @endif





            <div class="overflow-x-auto  ">
                <div class="py-4 inline-block min-w-full ">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center ">
                            <thead class="border-b bg-gray-50">
                                <tr>


                                    <th class="text-sm font-medium text-gray-600  px-6 py-6">
                                       titre
                                    </th>
                                    <th class="text-sm font-medium text-gray-600  px-6 py-6">
                                       Description
                                    </th>
                                    <th class="text-sm font-medium text-gray-600  px-6 py-6">
                                        Action
                                    </th>
                                </tr>

                            </thead>
                            <tbody>
                                @forelse ($posts as $item)
                                    <tr class="border-b-2 border-gray-100">
                                        <td class="text-sm font-medium text-gray-600  px-6 py-6">
                                            {{ $item->titre }}
                                        </td>
                                        <td class="text-sm font-medium text-gray-600  px-6 py-6">
                                            {{ $item->description }}
                                        </td>



                                        <td class="flex items-center justify-center p-2 " style="vertical-align:middle">

                                                <a class="p-1 text-teal-600 hover:bg-blue-300 hover:text-white rounded"
                                                   href="{{ route('posts.edit',$item->id) }}">
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox="0 0 24 24">
                                                        <title>Editer</title>
                                                        <g id="edit_line" fill='none' fill-rule='nonzero'>
                                                            <path
                                                                d='M24 0v24H0V0h24ZM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01-.184-.092Z' />
                                                            <path fill='#007AFFFF'
                                                                d='M13 3a1 1 0 0 1 .117 1.993L13 5H5v14h14v-8a1 1 0 0 1 1.993-.117L21 11v8a2 2 0 0 1-1.85 1.995L19 21H5a2 2 0 0 1-1.995-1.85L3 19V5a2 2 0 0 1 1.85-1.995L5 3h8Zm6.243.343a1 1 0 0 1 1.497 1.32l-.083.095-9.9 9.899a1 1 0 0 1-1.497-1.32l.083-.094 9.9-9.9Z' />
                                                        </g>
                                                    </svg>
                                                </a>
                                            <a href="" class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded">
                                                <form id="deleteForm" action="{{ route('posts.destroy', $item->id) }}" method="POST">
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="show_confirm" title='Delete' type="submit">
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox="0 0 24 24">
                                                            <title>Supprimer</title>
                                                            <g id="delete_2_line" fill='none' fill-rule='nonzero'>
                                                                <path
                                                                    d='M24 0v24H0V0h24ZM12.593 23.258l-.011.002-.071.035-.02.004-.014-.004-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01-.017.428.005.02.01.013.104.074.015.004.012-.004.104-.074.012-.016.004-.017-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113-.013.002-.185.093-.01.01-.003.011.018.43.005.012.008.007.201.093c.012.004.023 0 .029-.008l.004-.014-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014-.034.614c0 .012.007.02.017.024l.015-.002.201-.093.01-.008.004-.011.017-.43-.003-.012-.01-.01-.184-.092Z' />
                                                                <path fill='#FF6252FF'
                                                                    d='M14.28 2a2 2 0 0 1 1.897 1.368L16.72 5H20a1 1 0 1 1 0 2l-.003.071-.867 12.143A3 3 0 0 1 16.138 22H7.862a3 3 0 0 1-2.992-2.786L4.003 7.07A1.01 1.01 0 0 1 4 7a1 1 0 0 1 0-2h3.28l.543-1.632A2 2 0 0 1 9.721 2h4.558Zm3.717 5H6.003l.862 12.071a1 1 0 0 0 .997.929h8.276a1 1 0 0 0 .997-.929L17.997 7ZM10 10a1 1 0 0 1 .993.883L11 11v5a1 1 0 0 1-1.993.117L9 16v-5a1 1 0 0 1 1-1Zm4 0a1 1 0 0 1 1 1v5a1 1 0 1 1-2 0v-5a1 1 0 0 1 1-1Zm.28-6H9.72l-.333 1h5.226l-.334-1Z' />
                                                            </g>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </a>
                                        </td>
                                    </tr>

                                @empty
                                    <tr class="w-full">
                                        <td class="flex-1 w-full items-center justify-center  " colspan="4">
                                            <div>
                                                <p class="flex justify-center content-center p-4">
                                                    <img src="{{ asset('storage/empty.svg') }}" alt=""
                                                        class="w-20 h-20  ">
                                                <div>Aucun element trouve</div>
                                                </p>

                                            </div>

                                        </td>
                                    </tr>


                                    </tr>
                                @endforelse



                            </tbody>
                        </table>
                        {{-- <div class="mt-3">
                            {{ $categories->links() }}

                        </div> --}}
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var deleteButtons = document.querySelectorAll('.show_confirm');
                deleteButtons.forEach(function(button) {
                    button.addEventListener('click', function(event) {
                        var form = button.closest("form");
                        event.preventDefault();
                        Swal.fire({
                            title: "Voulez-vous supprimer le post?",
                            icon: "question",
                            iconHtml: "؟",
                            confirmButtonText: "Oui",
                            cancelButtonText: "Non",
                            showCancelButton: true,
                            showCloseButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            });
        </script>
</body>

</html>
