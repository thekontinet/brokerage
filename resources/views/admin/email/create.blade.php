<x-app-layout>
    <div class="bg-white max-w-xl mx-auto p-6 mt-4">
        <h4 class="font-medium py-3">Send Email</h4>
        <form action="{{route('admin.mailer.store')}}" method="post" class="space-y-4">
            @csrf
            <div>
                <input type="email" name="email" placeholder="Enter Email" class="w-full">
                <x-jet-input-error for="email"/>
            </div>
            <div>
                <input type="text" name="subject" placeholder="Enter Subject" class="w-full">
                <x-jet-input-error for="subject"/>
            </div>
            <div>
                <textarea id="editor" name="content" placeholder="Write Message" class="w-full"></textarea>
                <x-jet-input-error for="subject"/>
            </div>
            <x-jet-button>Send</x-jet-button>
        </form>
    </div>

    <!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>
</x-app-layout>
