const PreferenciaColor = window.matchMedia('(prefers-color-scheme: dark)').matches ?'dark':'light';
const setTheme = (theme) => {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('theme', theme);
}
setTheme(localStorage.getItem('theme') || PreferenciaColor);

//cambiar a modo dia y noche con el botón
function light(){
    let switchToTheme = localStorage.getItem('theme') === 'dark' ? 'light' : 'dark';
    setTheme(switchToTheme);
    }