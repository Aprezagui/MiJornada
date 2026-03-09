<x-app>
    <div class="min-h-screen flex items-center justify-center bg-slate-950 p-6">
        
        <div class="w-full max-w-md bg-slate-900/50 backdrop-blur-xl border border-slate-800 p-8 rounded-2xl shadow-2xl">
            
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-white mb-2">¿Olvidaste tu contraseña?</h2>
                <p class="text-slate-400 text-sm">
                    Introduce tu correo electrónico y te enviaremos las instrucciones para restablecerla.
                </p>
            </div>

            <form class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                    <input type="email" 
                           class="w-full bg-slate-950 border border-slate-700 text-white rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all" 
                           placeholder="usuario@empresa.com" required>
                </div>

                <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition-all transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-blue-500/20">
                    Enviar instrucciones
                </button>
            </form>

            <div class="mt-8 text-center">
                <a href="{{ route('login') }}" class="text-sm text-slate-500 hover:text-white transition-colors flex items-center justify-center gap-2">
                    <span class="text-lg">←</span> Volver al inicio de sesión
                </a>
            </div>
        </div>
    </div>
</x-app>