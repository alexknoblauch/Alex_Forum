    import { initializeApp } from "firebase/app";
    import { getFirestore, collection, addDoc } from "firebase/firestore";

    
    //FITREBASE CONFIG
    const firebaseConfig = {
        apiKey: "{{ env('FIREBASE_API_KEY') }}",
        authDomain: "{{ env('FIREBASE_AUTH_DOMAIN') }}",
        projectId: "{{ env('FIREBASE_PROJECT_ID') }}",
        storageBucket: "{{ env('FIREBASE_STORAGE_BUCKET') }}",
        messagingSenderId: "{{ env('FIREBASE_MESSAGING_SENDER_ID') }}",
        appId: "{{ env('FIREBASE_APP_ID') }}"
    };

    const app = initializeApp(firebaseConfig)
    const db = getFirestore(app)

    
    

    //GET ALL USER INTERACTIONS

    async function getUserInteractions(userId){
        if (!userId) throw new Error("User ID is required");
            try{
                const partnersCol = collection(db, 'inboxes', laravelUserUuid, 'partners')
                const snapshot = await getDocs(partnersCol)
                const allInteractions = snapshot.docs.map(doc => ({id: doc.id, ...doc.data}))
            } catch(error){
                console.log(error)
            }
    }

    
    export { app, db, getUserInteractions };
