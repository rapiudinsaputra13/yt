# Alur Kerja
Berikut alur kerja normal yang diterapkan pada siklus pengembangan aplikasi:
1. Administrator mengundang programmer untuk bergabung pada sebuah repositori dengan alamat email
2. Programmer mendaftar dan mengkonfirmasi untuk bergabung
3. Programmer meng-*cloning* repository
4. Programmer membuat personal branch
5. Programmer melakukan *pull* atau *sync* dengan repository sebelum melakukan perubahan
5. Programmer melakukan instalasi dan perubahan pada localhost
6. Programmer melakukan *commit* dan *push* ke repository
7. *Cache* (appliaction/cache),*Logs* (appliaction/logs),*Config* (appliaction/config/config.php),*Database* (appliaction/config/database.php) dan *Uploads* (uploads/) tidak disertakan (di-*ignore*) pada commit
8. Programmer login ke web interface GitLab lalu membuat *merge request* dari branch `personal` ke `main` lalu menunjuk (*assign*) administrator
9. Administrator dan tester melakukan validasi dan testing pada repository dan server development
10. Administrator melaporkan ke programmer bila ada yang perlu diperbaiki atau ditanyakan
11. Administrator melakukan *merge* ke branch `main`
12. Administrator dan tester melakukan validasi dan testing pada server production
13. Administrator menutup daftar isu yang terkait dengan perubahan yang telah dilakukan# testing
# Repository-Baru
