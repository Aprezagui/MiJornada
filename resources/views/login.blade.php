<x-app>
    <div class="min-h-screen flex items-center justify-center bg-slate-950 p-6">

        <div class="w-full max-w-md bg-slate-900/50 backdrop-blur-xl border border-slate-800 p-8 rounded-2xl shadow-2xl">

            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-white mb-2">Control de Fichajes</h2>
            </div>

            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                    <input type="email"
                        class="w-full bg-slate-950 border border-slate-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                        placeholder="usuario@empresa.com" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2">Contraseña</label>
                    <div class="relative flex items-center">
                        <input type="password" id="password"
                            class="w-full bg-slate-950 border border-slate-700 text-white rounded-lg px-4 py-3 pr-12 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all"
                            placeholder="Introduce tu contraseña" required>
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 text-slate-400 hover:text-white transition-colors">
                            👁
                        </button>
                    </div>
                </div>

                <div class="text-right mt-2">
                    <a href="{{ route('password.request') }}" class="text-xs text-blue-500 hover:text-blue-400 hover:underline transition-all">
                        ¿Has olvidado tu contraseña?
                    </a>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition-all transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-blue-500/20">
                    Iniciar sesión
                </button>
            </form>

            <div class="mt-8 text-center text-xs text-slate-500 uppercase tracking-widest">
                Sistema de control horario
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            password.type = (password.type === "password") ? "text" : "password";
        }
    </script>
</x-app>
