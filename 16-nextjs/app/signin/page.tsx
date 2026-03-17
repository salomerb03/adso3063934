import {SignIn} from "@stackframe/stack"
import Link from "next/link";
export default function SignInPage() {
    return (
        <div>
            <SignIn />
            <Link href="/">Go back Home</Link>
        </div>

    );
}