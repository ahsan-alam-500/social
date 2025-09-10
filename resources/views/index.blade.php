<x-app-layout :title="'Login'">
    <div class="flex items-center justify-center min-h-screen bg-gray-400">
        <div class="bg-gray-100 shadow-lg rounded-lg p-8 w-full max-w-md">
            <h2 class="text-3xl font-poppins text-blue-900 mb-6 text-center">Login</h2>

            <form id="loginForm" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" required
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <div>
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" required
                        class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                <button type="submit"
                    class="w-full bg-blue-900 text-white py-2 rounded-md hover:bg-blue-800 transition">
                    Login
                </button>
            </form>

            <p class="mt-4 text-center text-gray-600">
                Don’t have an account?
                <a href="{{ route('register') }}" class="text-blue-900 font-medium hover:underline">Register</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('loginForm');

            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                const formData = new FormData(form); // includes _token automatically

                try {
                    const response = await fetch("{{ route('login') }}", {
                        method: "POST",
                        body: formData,
                        headers: {
                            "Accept": "application/json" // do NOT set Content-Type
                        }
                    });

                    if (response.ok) {
                        const data = await response.json();
                        toastr.success(data.message || "Login successful!");
                        window.location.href = "/dashboard"; // redirect after login
                    } else {
                        const errorData = await response.json();
                        toastr.error(errorData.message || "Login failed. Check credentials.");
                    }
                } catch (error) {
                    console.error(error);
                    toastr.error("Something went wrong. Please try again.");
                }
            });
        });
    </script>
</x-app-layout>
