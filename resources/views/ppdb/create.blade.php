@extends('layouts.app')

@section('title', 'Pendaftaran PPDB - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">📝 Pendaftaran</span> PPDB 2024
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Bergabunglah dengan SMK Negeri 1 dan wujudkan impian karir Anda. 
            Isi formulir pendaftaran di bawah ini untuk memulai perjalanan pendidikan yang berkualitas.
        </p>
    </div>
</section>

<!-- Registration Info -->
<section class="py-16 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <div class="info-card">
                <div class="info-icon bg-blue-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">📅 Periode Pendaftaran</h3>
                <p class="text-gray-400 text-sm">Maret - Mei 2024</p>
                <p class="text-gray-400 text-sm">08:00 - 15:00 WIB</p>
            </div>
            
            <div class="info-card">
                <div class="info-icon bg-green-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">📋 Syarat Pendaftaran</h3>
                <p class="text-gray-400 text-sm">Lulusan SMP/MTs</p>
                <p class="text-gray-400 text-sm">Sehat jasmani & rohani</p>
            </div>
            
            <div class="info-card">
                <div class="info-icon bg-red-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">💰 Biaya Pendaftaran</h3>
                <p class="text-gray-400 text-sm">Gratis (Rp 0)</p>
                <p class="text-gray-400 text-sm">Tanpa biaya admin</p>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="form-container">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-white mb-4">
                    📝 Formulir Pendaftaran
                </h2>
                <p class="text-gray-400">
                    Lengkapi data diri Anda dengan benar. Semua field yang bertanda (*) wajib diisi.
                </p>
            </div>
            
            <form action="{{ route('ppdb.store') }}" method="POST" class="space-y-8" x-data="ppdbForm()">
                @csrf
                
                <!-- Personal Information -->
                <div class="form-section">
                    <h3 class="section-title">👤 Data Pribadi</h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="full_name" class="form-label">Nama Lengkap *</label>
                            <input type="text" 
                                   id="full_name" 
                                   name="full_name" 
                                   class="form-input @error('full_name') error @enderror"
                                   placeholder="Sesuai ijazah SMP/MTs"
                                   value="{{ old('full_name') }}"
                                   required>
                            @error('full_name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="nisn" class="form-label">NISN *</label>
                            <input type="text" 
                                   id="nisn" 
                                   name="nisn" 
                                   class="form-input @error('nisn') error @enderror"
                                   placeholder="10 digit NISN"
                                   value="{{ old('nisn') }}"
                                   maxlength="10"
                                   required>
                            @error('nisn')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="form-group">
                            <label for="gender" class="form-label">Jenis Kelamin *</label>
                            <select id="gender" 
                                    name="gender" 
                                    class="form-input @error('gender') error @enderror"
                                    required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('gender')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="birth_place" class="form-label">Tempat Lahir *</label>
                            <input type="text" 
                                   id="birth_place" 
                                   name="birth_place" 
                                   class="form-input @error('birth_place') error @enderror"
                                   placeholder="Kota kelahiran"
                                   value="{{ old('birth_place') }}"
                                   required>
                            @error('birth_place')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="birth_date" class="form-label">Tanggal Lahir *</label>
                            <input type="date" 
                                   id="birth_date" 
                                   name="birth_date" 
                                   class="form-input @error('birth_date') error @enderror"
                                   value="{{ old('birth_date') }}"
                                   required>
                            @error('birth_date')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div class="form-section">
                    <h3 class="section-title">📞 Informasi Kontak</h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Nomor Telepon *</label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   class="form-input @error('phone') error @enderror"
                                   placeholder="+62 812-3456-7890"
                                   value="{{ old('phone') }}"
                                   required>
                            @error('phone')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   class="form-input @error('email') error @enderror"
                                   placeholder="nama@email.com"
                                   value="{{ old('email') }}"
                                   required>
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="address" class="form-label">Alamat Lengkap *</label>
                        <textarea id="address" 
                                  name="address" 
                                  rows="3" 
                                  class="form-input @error('address') error @enderror"
                                  placeholder="Jalan, RT/RW, Kelurahan, Kecamatan, Kota, Kode Pos"
                                  required>{{ old('address') }}</textarea>
                        @error('address')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <!-- Academic Information -->
                <div class="form-section">
                    <h3 class="section-title">🎓 Informasi Akademik</h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="previous_school" class="form-label">Asal Sekolah *</label>
                            <input type="text" 
                                   id="previous_school" 
                                   name="previous_school" 
                                   class="form-input @error('previous_school') error @enderror"
                                   placeholder="Nama SMP/MTs asal"
                                   value="{{ old('previous_school') }}"
                                   required>
                            @error('previous_school')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="graduation_year" class="form-label">Tahun Lulus *</label>
                            <select id="graduation_year" 
                                    name="graduation_year" 
                                    class="form-input @error('graduation_year') error @enderror"
                                    required>
                                <option value="">Pilih Tahun</option>
                                <option value="2024" {{ old('graduation_year') == '2024' ? 'selected' : '' }}>2024</option>
                                <option value="2023" {{ old('graduation_year') == '2023' ? 'selected' : '' }}>2023</option>
                                <option value="2022" {{ old('graduation_year') == '2022' ? 'selected' : '' }}>2022</option>
                            </select>
                            @error('graduation_year')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="program_choice" class="form-label">Pilihan Program Keahlian *</label>
                        <select id="program_choice" 
                                name="program_choice" 
                                class="form-input @error('program_choice') error @enderror"
                                required>
                            <option value="">Pilih Program Keahlian</option>
                            <option value="tkj" {{ old('program_choice') == 'tkj' ? 'selected' : '' }}>Teknik Komputer & Jaringan</option>
                            <option value="rpl" {{ old('program_choice') == 'rpl' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                            <option value="sipil" {{ old('program_choice') == 'sipil' ? 'selected' : '' }}>Teknik Sipil</option>
                            <option value="elektro" {{ old('program_choice') == 'elektro' ? 'selected' : '' }}>Teknik Elektro</option>
                            <option value="mesin" {{ old('program_choice') == 'mesin' ? 'selected' : '' }}>Teknik Mesin</option>
                            <option value="akuntansi" {{ old('program_choice') == 'akuntansi' ? 'selected' : '' }}>Akuntansi & Keuangan</option>
                        </select>
                        @error('program_choice')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <!-- Parent Information -->
                <div class="form-section">
                    <h3 class="section-title">👨‍👩‍👧‍👦 Data Orang Tua/Wali</h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="parent_name" class="form-label">Nama Orang Tua/Wali *</label>
                            <input type="text" 
                                   id="parent_name" 
                                   name="parent_name" 
                                   class="form-input @error('parent_name') error @enderror"
                                   placeholder="Nama lengkap orang tua/wali"
                                   value="{{ old('parent_name') }}"
                                   required>
                            @error('parent_name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="parent_phone" class="form-label">Telepon Orang Tua/Wali *</label>
                            <input type="tel" 
                                   id="parent_phone" 
                                   name="parent_phone" 
                                   class="form-input @error('parent_phone') error @enderror"
                                   placeholder="+62 812-3456-7890"
                                   value="{{ old('parent_phone') }}"
                                   required>
                            @error('parent_phone')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="parent_job" class="form-label">Pekerjaan Orang Tua/Wali</label>
                        <input type="text" 
                               id="parent_job" 
                               name="parent_job" 
                               class="form-input @error('parent_job') error @enderror"
                               placeholder="Pekerjaan orang tua/wali"
                               value="{{ old('parent_job') }}">
                        @error('parent_job')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <!-- Agreement -->
                <div class="form-section">
                    <div class="bg-yellow-400/10 border border-yellow-400/30 rounded-xl p-6">
                        <h4 class="text-yellow-400 font-semibold mb-4">📋 Pernyataan & Persetujuan</h4>
                        <div class="space-y-3 text-sm text-gray-300">
                            <label class="flex items-start">
                                <input type="checkbox" 
                                       name="data_accuracy" 
                                       class="mt-1 mr-3 rounded border-gray-600 bg-gray-800 text-yellow-400 focus:ring-yellow-400"
                                       required>
                                <span>Saya menyatakan bahwa semua data yang saya isi adalah benar dan dapat dipertanggungjawabkan.</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" 
                                       name="terms_agreement" 
                                       class="mt-1 mr-3 rounded border-gray-600 bg-gray-800 text-yellow-400 focus:ring-yellow-400"
                                       required>
                                <span>Saya setuju dengan <a href="#" class="text-yellow-400 hover:underline">syarat dan ketentuan</a> yang berlaku di SMK Negeri 1.</span>
                            </label>
                            <label class="flex items-start">
                                <input type="checkbox" 
                                       name="commitment" 
                                       class="mt-1 mr-3 rounded border-gray-600 bg-gray-800 text-yellow-400 focus:ring-yellow-400"
                                       required>
                                <span>Saya berkomitmen untuk mengikuti seluruh proses seleksi dengan jujur dan sportif.</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center pt-8">
                    <button type="submit" 
                            class="btn-primary-large group"
                            x-bind:disabled="loading"
                            x-bind:class="{ 'opacity-50 cursor-not-allowed': loading }">
                        <span x-show="!loading" class="flex items-center">
                            <span>🚀 Daftar Sekarang</span>
                            <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </span>
                        <span x-show="loading" class="flex items-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Mengirim Data...
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
.info-card {
    @apply bg-gray-800 p-6 rounded-2xl text-center border border-gray-700 hover:border-yellow-400 transition-all duration-300;
}

.info-icon {
    @apply w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 text-white;
}

.form-container {
    @apply bg-gray-900 rounded-2xl p-8 border border-gray-700;
}

.form-section {
    @apply space-y-6;
}

.section-title {
    @apply text-xl font-bold text-yellow-400 mb-6 pb-3 border-b border-gray-700;
}

.form-group {
    @apply space-y-2;
}

.form-label {
    @apply block text-sm font-medium text-gray-300;
}

.form-input {
    @apply w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition-all duration-300;
}

.form-input.error {
    @apply border-red-500 focus:border-red-500 focus:ring-red-500/20;
}

.error-message {
    @apply text-red-400 text-sm mt-1;
}

.btn-primary-large {
    @apply bg-yellow-400 text-black px-12 py-4 rounded-2xl font-bold text-lg hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-2xl;
}

.btn-primary-large:hover {
    box-shadow: 0 20px 60px rgba(255, 215, 0, 0.4);
}
</style>

<script>
function ppdbForm() {
    return {
        loading: false,
        
        init() {
            // Form validation and enhancement can be added here
        }
    }
}
</script>

@endsection