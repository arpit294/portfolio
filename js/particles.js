// Premium IT / Tech Network Background Scene
document.addEventListener('DOMContentLoaded', () => {
    const canvas = document.getElementById('bg-canvas');
    if (!canvas || typeof THREE === 'undefined') return;

    // Setup Scene, Camera, Renderer
    const scene = new THREE.Scene();
    
    // Add Fog for depth
    scene.fog = new THREE.FogExp2(0x050505, 0.002);

    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 35;

    const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

    // Responsive
    window.addEventListener('resize', () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

    // 1. Centerpiece: IT Cloud / Global Network Core
    // A highly detailed sphere representing global connectivity
    const coreGeometry = new THREE.SphereGeometry(14, 32, 32);
    const coreMaterial = new THREE.MeshStandardMaterial({
        color: 0x00f3ff,
        wireframe: true,
        transparent: true,
        opacity: 0.15
    });
    const networkCore = new THREE.Mesh(coreGeometry, coreMaterial);
    scene.add(networkCore);

    // Inner Data Core
    const innerGeometry = new THREE.IcosahedronGeometry(10, 1);
    const innerMaterial = new THREE.MeshStandardMaterial({
        color: 0xb026ff,
        wireframe: true,
        transparent: true,
        opacity: 0.1
    });
    const innerCore = new THREE.Mesh(innerGeometry, innerMaterial);
    networkCore.add(innerCore);

    // 2. Data Packets / Microservices (Floating Cubes)
    const cubes = [];
    const cubeGeom = new THREE.BoxGeometry(0.8, 0.8, 0.8);
    const cubeMat = new THREE.MeshStandardMaterial({
        color: 0x00f3ff,
        transparent: true,
        opacity: 0.6,
        roughness: 0.1,
        metalness: 0.8
    });

    for(let i = 0; i < 40; i++) {
        const cube = new THREE.Mesh(cubeGeom, cubeMat);
        // Position them in an orbit around the core
        const radius = 18 + Math.random() * 15;
        const theta = Math.random() * Math.PI * 2;
        const phi = Math.acos(Math.random() * 2 - 1);
        
        cube.position.x = radius * Math.sin(phi) * Math.cos(theta);
        cube.position.y = radius * Math.sin(phi) * Math.sin(theta);
        cube.position.z = radius * Math.cos(phi);
        
        // Random rotation
        cube.rotation.x = Math.random() * Math.PI;
        cube.rotation.y = Math.random() * Math.PI;
        
        // Save orbit data for animation
        cube.userData = {
            orbitSpeed: (Math.random() * 0.005) + 0.002,
            rotationSpeedX: (Math.random() * 0.02) - 0.01,
            rotationSpeedY: (Math.random() * 0.02) - 0.01,
            angle: theta,
            radius: radius,
            phi: phi
        };
        
        scene.add(cube);
        cubes.push(cube);
    }

    // 3. Digital Grid / Particles (Data Streams)
    const particlesGeometry = new THREE.BufferGeometry();
    const particlesCount = 1000;
    const posArray = new Float32Array(particlesCount * 3);
    
    for(let i = 0; i < particlesCount * 3; i++) {
        posArray[i] = (Math.random() - 0.5) * 120;
    }
    
    particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
    const particlesMaterial = new THREE.PointsMaterial({
        size: 0.15,
        color: 0x00f3ff, // Cyan tech color
        transparent: true,
        opacity: 0.5,
        blending: THREE.AdditiveBlending
    });
    
    const particlesMesh = new THREE.Points(particlesGeometry, particlesMaterial);
    scene.add(particlesMesh);

    // 4. Cinematic Lighting
    const pointLight1 = new THREE.PointLight(0x00f3ff, 2, 100);
    pointLight1.position.set(20, 20, 20);
    scene.add(pointLight1);

    const pointLight2 = new THREE.PointLight(0xb026ff, 3, 100);
    pointLight2.position.set(-20, -20, 20);
    scene.add(pointLight2);
    
    const pointLight3 = new THREE.PointLight(0x00ff88, 2, 100);
    pointLight3.position.set(0, 30, -20);
    scene.add(pointLight3);

    // Mouse Interaction
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;
    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;

    document.addEventListener('mousemove', (event) => {
        mouseX = (event.clientX - windowHalfX) * 0.001;
        mouseY = (event.clientY - windowHalfY) * 0.001;
    });

    // Animation Loop
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);
        const elapsedTime = clock.getElapsedTime();

        // Smooth mouse follow
        targetX = mouseX * 1.5;
        targetY = mouseY * 1.5;
        
        // Rotate the network cores
        networkCore.rotation.y += 0.002;
        networkCore.rotation.x += 0.001;
        
        innerCore.rotation.y -= 0.003;
        innerCore.rotation.z += 0.002;

        // Animate floating data cubes (orbiting)
        cubes.forEach(cube => {
            cube.userData.angle += cube.userData.orbitSpeed;
            // Update position in orbit
            cube.position.x = cube.userData.radius * Math.sin(cube.userData.phi) * Math.cos(cube.userData.angle);
            cube.position.z = cube.userData.radius * Math.cos(cube.userData.phi) * Math.sin(cube.userData.angle);
            
            // Spin on own axis
            cube.rotation.x += cube.userData.rotationSpeedX;
            cube.rotation.y += cube.userData.rotationSpeedY;
        });
        
        // Parallax effect on the entire scene based on mouse
        scene.rotation.y += 0.05 * (targetX - scene.rotation.y);
        scene.rotation.x += 0.05 * (targetY - scene.rotation.x);

        // Slowly move particles (like data streams falling)
        particlesMesh.position.y = (elapsedTime * 2) % 20 - 10;
        particlesMesh.rotation.y = elapsedTime * 0.02;

        // Move lights for dynamic server glow effect
        pointLight1.position.x = Math.sin(elapsedTime * 0.5) * 30;
        pointLight2.position.x = Math.cos(elapsedTime * 0.3) * 30;

        renderer.render(scene, camera);
    }

    animate();
});
