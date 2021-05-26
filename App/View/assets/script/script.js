class Effects {
  animate(){
    const data = document.querySelectorAll('[data-opacity]');
    data.forEach((el, index) => {
      setTimeout(() => {
        el.classList.add('ativo');
      }, index === 0 ? (index + 1) * 700 : index * 700);
    });
  }

  MasckedPass(){
    const OriginalPassword = document.querySelector('[data-pass]');
    const passwords = [OriginalPassword.innerHTML];
    const ReplacedPassword = OriginalPassword.innerHTML.replace(OriginalPassword.innerHTML,"*7**23*ff**vv*");
    OriginalPassword.innerHTML = ReplacedPassword;
    passwords[1] = OriginalPassword.innerHTML;

    function OnMouseOver(e){
      OriginalPassword.classList.add('ativoPass');
      OriginalPassword.innerHTML = passwords[0];
    } 

    function OnMouseLeave(e){
      OriginalPassword.classList.remove('ativoPass');
      OriginalPassword.innerHTML = passwords[1];
    } 

    OriginalPassword.addEventListener('mouseover', OnMouseOver);
    OriginalPassword.addEventListener('mouseleave', OnMouseLeave);

  }

  animateUpdate(){
    const DataClick = document.querySelectorAll('[data-click]');
    const DataUpdate = document.querySelectorAll('[data-update]');
    const DataTitulo = document.querySelectorAll('dd h1');

    function List(index){
      DataUpdate[index].classList.toggle('ativo');
      DataTitulo[index].classList.toggle('ativoUp');
    }

    DataClick.forEach((el, index) => {
      el.addEventListener('click', () => List(index));
    });
  }

  ajax(){
    const DataSend = document.querySelectorAll('[data-send]');
    const DataAjax = document.querySelectorAll('[data-ajax]');
    const DataId = document.querySelectorAll('[data-id]');
    
    async function ChangeText(e, index){
      const value = DataAjax[index].value;
      const {ajax} = DataAjax[index].dataset;
      const {id} = DataId[index].dataset;

      const res = await fetch(`http://localhost/Exercise/App/Controller/Ajax.php?${ajax}=${value}&id=${id}`, {
        method: "GET"
      }).finally(() => document.location.reload(true));
    }
    DataSend.forEach((el,index) => el.addEventListener('click', (e) => ChangeText(e,index)));
  }
}

const animate = new Effects;
animate.animate();
animate.MasckedPass();
animate.animateUpdate();
animate.ajax();