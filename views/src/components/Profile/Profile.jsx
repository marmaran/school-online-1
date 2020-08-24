import React from 'react';

import avatar from '../../img/avatar-01.jpg';

export const Profile = props => {
    const { user } = props;

    return (
        <div className="widget__wrapper widget__profile has-shadow">
            <div className="widget__body">
                <img src={ avatar } alt="avatar" className="user__img" width="150"
                        height="150" />
                <span className="user__name h3">{user.name}</span>
                <span className="user__email h4 mb-4">{user.email}</span>
                <span className="user__position h4 mb-4">{}</span>
                <ul className="user__subjects subject__list">
                    <li className="subject__item">
                        <a href="/" className="subject__link">
                            {user.subject}
                        </a>
                    </li>
                </ul>
                <hr className="separator-dashed" />
            </div>
        </div>
    )
}