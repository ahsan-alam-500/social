<x-app-layout :title="'Register'">
    <div class="flex items-center justify-center min-h-screen bg-gray-400">
        <div class="bg-gray-100 shadow-lg rounded-lg p-8 w-full max-w-lg">
            <h2 class="text-3xl font-poppins text-blue-900 mb-6 text-center">Register</h2>

            <form id="registerForm" class="space-y-4" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-gray-700">Full Name</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <!-- Username -->
                <div>
                    <label class="block text-gray-700">Username</label>
                    <input type="text" name="username" required
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <!-- Phone -->
                <div>
                    <label class="block text-gray-700">Phone</label>
                    <input type="text" name="phone"
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <!-- Avatar -->
                <div>
                    <label class="block text-gray-700">Avatar</label>
                    <input type="file" name="avatar"
                        class="w-full mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" required
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <button type="submit"
                    class="w-full bg-blue-900 text-white py-2 rounded-md hover:bg-blue-800 transition">
                    Register
                </button>
            </form>

            <p class="mt-4 text-center text-gray-600">
                Already have an account?
                <a href="{{ route('login') }}" class="text-blue-900 font-medium hover:underline">Login</a>
            </p>
        </div>
    </div>

    <!-- Vanilla JS AJAX with Toastify -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registerForm');

            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                const formData = new FormData(form);

                try {
                    const response = await fetch("{{ route('register') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": formData.get('_token'),
                            "Accept": "application/json"
                        },
                        body: formData
                    });

                    if (response.ok) {
                        const data = await response.json();
                        toastr.success(data.message || "Registration successful!");

                        // Redirect if needed
                        window.location.href = "/dashboard";
                    } else {
                        const errorData = await response.json();
                        toastr.error(errorData.message || "Registration failed. Please try again.");
                    }
                } catch (error) {
                    console.error("Error:", error);
                    toastr.error("Something went wrong. Please try again.");
                }
            });
        });
    </script>
</x-app-layout>
