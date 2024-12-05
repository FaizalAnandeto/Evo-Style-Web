            //kecil besar gmbar
            const clt = document.getElementById('clt');
            const image1 = document.getElementById('image1');
            
            clt.addEventListener('mser', () => {
              image1.classList.add('zoom-in');
            });
            
            clt.addEventListener('msel', () => {
              image1.classList.remove('zoom-in');
            });
            
            window.addEventListener('rsz', () => {
              const width = window.innerWidth;
              const height = window.innerHeight;
            
              image1.style.width = `${Math.min(width * 0.8, 600)}px`;
              image1.style.height = 'auto';
            });
            
            window.dispatchEvent(new Event('rsz'));